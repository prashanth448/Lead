<template>
    <AdminPageHeader>
        <template #header>
            <a-page-header :title="$t(`menu.lead_notes`)" class="p-0" />
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
                    {{ $t(`menu.lead_notes`) }}
                </a-breadcrumb-item>
            </a-breadcrumb>
        </template>
    </AdminPageHeader>

    <a-row>
        <a-col :xs="24" :sm="24" :md="24" :lg="30" :xl="24">
            <a-card class="page-content-container">
                <LeadNotesTable
                    logType="notes"
                    :showFormFields="true"
                    :showCampaignStatus="true"
                    :showTableSearch="true"
                    :showLeadDetails="true"
                    :showAddButton="false"
                    :showActionButton="false"
                />
            </a-card>
        </a-col>
    </a-row>
</template>

<script>
import { EyeOutlined, PlayCircleOutlined, DownOutlined } from "@ant-design/icons-vue";
import viewDrawer from "../../../../common/composable/viewDrawer";
import AdminPageHeader from "../../../../common/layouts/AdminPageHeader.vue";
import LeadNotesTable from "../../../components/lead-notes/index.vue";

export default {
    components: {
        EyeOutlined,
        PlayCircleOutlined,
        DownOutlined,

        AdminPageHeader,
        LeadNotesTable,
    },
    setup() {
        const leadDrawer = viewDrawer();

        return {
            ...leadDrawer,
        };
    },
};
</script>
