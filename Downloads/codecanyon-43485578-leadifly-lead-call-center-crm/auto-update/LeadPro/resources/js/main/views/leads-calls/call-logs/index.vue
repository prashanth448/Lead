<template>
    <AdminPageHeader>
        <template #header>
            <a-page-header :title="$t(`menu.call_logs`)" class="p-0" />
        </template>
        <template #breadcrumb>
            <a-breadcrumb separator="-" style="font-size: 12px">
                <a-breadcrumb-item>
                    <router-link :to="{ name: 'admin.dashboard.index' }">
                        {{ $t(`menu.dashboard`) }}
                    </router-link>
                </a-breadcrumb-item>
                <a-breadcrumb-item>
                    {{ $t(`menu.leads_calls`) }}
                </a-breadcrumb-item>
                <a-breadcrumb-item>
                    {{ $t(`menu.call_logs`) }}
                </a-breadcrumb-item>
            </a-breadcrumb>
        </template>
    </AdminPageHeader>

    <a-row>
        <a-col :xs="24" :sm="24" :md="24" :lg="30" :xl="24">
            <a-card class="page-content-container">
                <CallLogTable :showAction="false" :showCampaignStatus="true" />
            </a-card>
        </a-col>
    </a-row>
</template>

<script>
import { EyeOutlined, PlayCircleOutlined, DownOutlined } from "@ant-design/icons-vue";
import AdminPageHeader from "../../../../common/layouts/AdminPageHeader.vue";
import CallLogTable from "../../../components/lead-logs/index.vue";

export default {
    components: {
        EyeOutlined,
        PlayCircleOutlined,
        DownOutlined,

        AdminPageHeader,
        CallLogTable,
    },
    setup() {
        return {};
    },
};
</script>
