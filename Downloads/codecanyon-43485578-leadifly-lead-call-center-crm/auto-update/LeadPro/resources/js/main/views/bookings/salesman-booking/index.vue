<template>
    <AdminPageHeader>
        <template #header>
            <a-page-header :title="$t(`menu.salesman_bookings`)" class="p-0" />
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
                    {{ $t(`menu.salesman_bookings`) }}
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
                    <a-col :xs="24" :sm="24" :md="12" :lg="6" :xl="6">
                        <a-select
                            v-model:value="extraFilters.user_id"
                            :placeholder="
                                $t('common.select_default_text', [
                                    $t('salesman.salesman'),
                                ])
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
                                                record.salesman_booking.date_time
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
                                            record.salesman_booking &&
                                            record.salesman_booking.user &&
                                            record.salesman_booking.user.name
                                                ? record.salesman_booking.user.name
                                                : "-"
                                        }}
                                    </template>
                                    <template v-if="column.dataIndex === 'action'">
                                        <a-space
                                            v-if="record.x_last_action_by == user.xid"
                                        >
                                            <a-tooltip :title="$t('lead.go_resume_call')">
                                                <a-button
                                                    type="primary"
                                                    @click="goAndResumeLead(record)"
                                                >
                                                    <template #icon>
                                                        <PlayCircleOutlined />
                                                    </template>
                                                </a-button>
                                            </a-tooltip>
                                            <DeleteBooking
                                                bookingType="salesman_bookings"
                                                @success="setUrlData"
                                                :xLeadId="record.xid"
                                                :showDeleteText="false"
                                            />
                                        </a-space>
                                        <span v-else>
                                            <a-tooltip>
                                                <template #title>
                                                    {{
                                                        $t(
                                                            "salesman_booking.you_are_not_last_actioner"
                                                        )
                                                    }}
                                                </template>
                                                <InfoCircleOutlined />
                                            </a-tooltip>
                                        </span>
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
import {
    PlayCircleOutlined,
    ExclamationCircleOutlined,
    InfoCircleOutlined,
} from "@ant-design/icons-vue";
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
        PlayCircleOutlined,
        InfoCircleOutlined,

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
            const usersPromise = axiosAdmin.get("all-users?log_type=salesman_bookings");

            Promise.all([campaignsPromise, usersPromise]).then(
                ([campaignsResponse, usersResponse]) => {
                    allCampaigns.value = campaignsResponse.data;
                    allUsers.value = usersResponse.data.users;

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

        const goAndResumeLead = (record) => {
            Modal.confirm({
                title: t("common.are_you_sure") + "?",
                icon: createVNode(ExclamationCircleOutlined),
                content: t("lead.are_you_want_to_resume_this_lead"),
                centered: true,
                okText: t("common.yes"),
                okType: "danger",
                cancelText: t("common.no"),
                onOk() {
                    router.push({
                        name: "admin.call_manager.take_action",
                        params: {
                            id: record.xid,
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

            setUrlData,
            goAndResumeLead,
        };
    },
};
</script>
