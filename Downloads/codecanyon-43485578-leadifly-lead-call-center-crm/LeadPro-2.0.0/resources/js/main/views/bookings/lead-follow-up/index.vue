<template>
    <AdminPageHeader>
        <template #header>
            <a-page-header :title="$t(`menu.lead_follow_up`)" class="p-0" />
        </template>
        <template #breadcrumb>
            <a-breadcrumb separator="-" style="font-size: 12px">
                <a-breadcrumb-item>
                    <router-link :to="{ name: 'admin.dashboard.index' }">
                        {{ $t(`menu.dashboard`) }}
                    </router-link>
                </a-breadcrumb-item>
                <a-breadcrumb-item>
                    {{ $t(`menu.bookings`) }}
                </a-breadcrumb-item>
                <a-breadcrumb-item>
                    {{ $t(`menu.lead_follow_up`) }}
                </a-breadcrumb-item>
            </a-breadcrumb>
        </template>
    </AdminPageHeader>

    <a-row>
        <a-col :xs="24" :sm="24" :md="24" :lg="30" :xl="24">
            <a-card class="page-content-container">
                <a-row :gutter="[15, 15]" class="mb-20">
                    <a-col :xs="24" :sm="24" :md="12" :lg="6" :xl="6">
                        <a-select
                            v-model:value="extraFilters.campaign_id"
                            :placeholder="
                                $t('common.select_default_text', [$t('lead.campaign')])
                            "
                            :allowClear="true"
                            style="width: 100%"
                            optionFilterProp="title"
                            show-search
                            @change="setUrlData"
                        >
                            <a-select-option
                                v-for="allCampaign in allCampaigns"
                                :key="allCampaign.xid"
                                :title="allCampaign.name"
                                :value="allCampaign.xid"
                            >
                                {{ allCampaign.name }}
                            </a-select-option>
                        </a-select>
                    </a-col>
                    <a-col
                        v-if="
                            permsArray.includes('leads_view_all') ||
                            permsArray.includes('admin')
                        "
                        :xs="24"
                        :sm="24"
                        :md="12"
                        :lg="6"
                        :xl="6"
                    >
                        <a-select
                            v-model:value="extraFilters.user_id"
                            :placeholder="
                                $t('common.select_default_text', [$t('user.user')])
                            "
                            :allowClear="true"
                            style="width: 100%"
                            optionFilterProp="title"
                            show-search
                            @change="setUrlData"
                        >
                            <a-select-option
                                v-for="allUsers in allUsers"
                                :key="allUsers.xid"
                                :title="allUsers.name"
                                :value="allUsers.xid"
                            >
                                {{ allUsers.name }}
                            </a-select-option>
                        </a-select>
                    </a-col>
                    <a-col :xs="24" :sm="24" :md="8" :lg="8" :xl="8">
                        <DateRangePicker
                            @dateTimeChanged="
                                (changedDateTime) => {
                                    extraFilters.dates = changedDateTime;
                                    setUrlData();
                                }
                            "
                        />
                    </a-col>
                </a-row>

                <a-row class="mt-20">
                    <a-col :span="24">
                        <div class="table-responsive">
                            <a-table
                                :columns="columns"
                                :row-key="(record) => record.xid"
                                :data-source="table.data"
                                :pagination="table.pagination"
                                :loading="table.loading"
                                @change="handleTableChange"
                            >
                                <template #bodyCell="{ column, record }">
                                    <template
                                        v-if="column.dataIndex === 'reference_number'"
                                    >
                                        <a-button
                                            type="link"
                                            class="p-0"
                                            @click="showViewDrawer(record)"
                                        >
                                            {{
                                                record.reference_number != "" &&
                                                record.reference_number != undefined
                                                    ? record.reference_number
                                                    : "---"
                                            }}
                                        </a-button>
                                    </template>
                                    <template v-if="column.dataIndex === 'date_time'">
                                        {{
                                            formatDateTime(
                                                record.lead_follow_up.date_time
                                            )
                                        }}
                                    </template>
                                    <template v-if="column.dataIndex === 'campaign'">
                                        {{
                                            record.campaign && record.campaign.name
                                                ? record.campaign.name
                                                : "-"
                                        }}
                                    </template>
                                    <template v-if="column.dataIndex === 'actioner'">
                                        {{
                                            record.lead_follow_up &&
                                            record.lead_follow_up.user &&
                                            record.lead_follow_up.user.name
                                                ? record.lead_follow_up.user.name
                                                : "-"
                                        }}
                                    </template>
                                    <template v-if="column.dataIndex === 'action'">
                                        <a-space>
                                            <a-tooltip
                                                v-if="
                                                    record.lead_follow_up.x_user_id ==
                                                    user.xid
                                                "
                                                :title="
                                                    $t('lead_follow_up.start_follow_up')
                                                "
                                            >
                                                <a-button
                                                    type="primary"
                                                    @click="startFollowUp(record)"
                                                >
                                                    <template #icon>
                                                        <DoubleRightOutlined />
                                                    </template>
                                                </a-button>
                                            </a-tooltip>
                                            <DeleteBooking
                                                v-if="
                                                    permsArray.includes(
                                                        'leads_view_all'
                                                    ) || permsArray.includes('admin')
                                                "
                                                bookingType="lead_follow_up"
                                                @success="setUrlData"
                                                :xLeadId="record.xid"
                                                :showDeleteText="false"
                                            />
                                        </a-space>
                                    </template>
                                </template>
                            </a-table>
                        </div>
                    </a-col>
                </a-row>
            </a-card>
        </a-col>
    </a-row>

    <!-- Global Compaonent -->
    <view-lead-details
        :visible="isViewDrawerVisible"
        :lead="viewDrawerData"
        @close="hideViewDrawer"
    />
</template>

<script>
import { ref, createVNode, onMounted } from "vue";
import { Modal, notification } from "ant-design-vue";
import { DoubleRightOutlined, ExclamationCircleOutlined } from "@ant-design/icons-vue";
import { useI18n } from "vue-i18n";
import { useRouter } from "vue-router";
import apiAdmin from "../../../../common/composable/apiAdmin";
import datatable from "../../../../common/composable/datatable";
import common from "../../../../common/composable/common";
import viewDrawer from "../../../../common/composable/viewDrawer";
import fields from "./fields";
import AdminPageHeader from "../../../../common/layouts/AdminPageHeader.vue";
import DateRangePicker from "../../../../common/components/common/calendar/DateRangePicker.vue";
import DeleteBooking from "../DeleteBooking.vue";

export default {
    components: {
        DoubleRightOutlined,

        AdminPageHeader,
        DateRangePicker,
        DeleteBooking,
    },
    setup() {
        const { permsArray, getCampaignUrl, user, formatDateTime } = common();
        const { url, columns, hashableColumns } = fields();
        const { t } = useI18n();
        const router = useRouter();
        const { addEditRequestAdmin, loading, rules } = apiAdmin();
        const newTable = datatable();
        const extraFilters = ref({
            campaign_id: undefined,
            dates: [],
            user_id: undefined,
        });
        const allCampaigns = ref([]);
        const allUsers = ref([]);
        const leadDrawer = viewDrawer();

        onMounted(() => {
            const campaignsUrl = getCampaignUrl();
            const campaignsPromise = axiosAdmin.get(campaignsUrl);
            const staffMembersPromise = axiosAdmin.get(
                "all-users?log_type=lead_follow_up"
            );

            Promise.all([campaignsPromise, staffMembersPromise]).then(
                ([campaignsResponse, staffMembersResponse]) => {
                    allCampaigns.value = campaignsResponse.data;
                    allUsers.value = staffMembersResponse.data.users;

                    extraFilters.value = {
                        ...extraFilters.value,
                        user_id: user.value.xid,
                    };
                    if (
                        permsArray.value.includes("leads_view_all") ||
                        permsArray.value.includes("admin")
                    ) {
                    }

                    newTable.hashable.value = [...hashableColumns];

                    setUrlData();
                }
            );
        });

        const setUrlData = () => {
            newTable.tableUrl.value = {
                url,
                extraFilters,
            };
            newTable.hashable.value = [...hashableColumns];

            newTable.table.pagination = { ...newTable.table.pagination, current: 1 };
            newTable.fetch({
                page: 1,
            });
        };

        const startFollowUp = (followUpDetails) => {
            Modal.confirm({
                title: t("common.start") + "?",
                icon: createVNode(ExclamationCircleOutlined),
                content: t(`lead_follow_up.start_follow_up_message`),
                centered: true,
                okText: t("common.yes"),
                okType: "danger",
                cancelText: t("common.no"),
                onOk() {
                    addEditRequestAdmin({
                        url: `lead-follow-ups/take-action`,
                        data: {
                            x_lead_id: followUpDetails.xid,
                            booking_type: "lead_follow_up",
                        },
                        success: (res) => {
                            if (res && res.lead_id) {
                                router.push({
                                    name: "admin.call_manager.take_action",
                                    params: {
                                        id: res.lead_id,
                                    },
                                });
                            }
                        },
                    });
                },
                onCancel() {},
            });
        };

        return {
            ...newTable,
            ...leadDrawer,
            url,
            columns,
            formatDateTime,
            hashableColumns,
            allCampaigns,
            allUsers,
            permsArray,
            extraFilters,
            user,

            startFollowUp,
            setUrlData,
        };
    },
};
</script>
