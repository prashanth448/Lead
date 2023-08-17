<template>
    <AdminPageHeader>
        <template #header>
            <a-page-header :title="$t(`menu.products`)" class="p-0">
                <template
                    v-if="
                        permsArray.includes('products_create') ||
                        permsArray.includes('admin')
                    "
                    #extra
                >
                    <a-button type="primary" @click="addItem">
                        <PlusOutlined />
                        {{ $t("product.add") }}
                    </a-button>
                </template>
            </a-page-header>
        </template>
        <template #breadcrumb>
            <a-breadcrumb separator="-" style="font-size: 12px">
                <a-breadcrumb-item>
                    <router-link :to="{ name: 'admin.dashboard.index' }">
                        {{ $t(`menu.dashboard`) }}
                    </router-link>
                </a-breadcrumb-item>
                <a-breadcrumb-item>
                    {{ $t(`menu.products`) }}
                </a-breadcrumb-item>
            </a-breadcrumb>
        </template>
    </AdminPageHeader>

    <a-row>
        <a-col :xs="24" :sm="24" :md="24" :lg="24" :xl="24">
            <a-card class="page-content-container">
                <AddEdit
                    :addEditType="addEditType"
                    :visible="addEditVisible"
                    :url="addEditUrl"
                    @addEditSuccess="addEditSuccess"
                    @closed="onCloseAddEdit"
                    :formData="formData"
                    :data="viewData"
                    :pageTitle="pageTitle"
                    :successMessage="successMessage"
                />

                <a-row :gutter="[15, 15]" class="mb-20">
                    <a-col :xs="24" :sm="24" :md="12" :lg="8" :xl="8">
                        <a-input-group compact>
                            <a-select
                                style="width: 25%"
                                v-model:value="table.searchColumn"
                                :placeholder="$t('common.select_default_text', [''])"
                            >
                                <a-select-option
                                    v-for="filterableColumn in filterableColumns"
                                    :key="filterableColumn.key"
                                >
                                    {{ filterableColumn.value }}
                                </a-select-option>
                            </a-select>
                            <a-input-search
                                style="width: 75%"
                                v-model:value="table.searchString"
                                show-search
                                @change="onTableSearch"
                                @search="onTableSearch"
                                :loading="table.filterLoading"
                            />
                        </a-input-group>
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
                                    <template v-if="column.dataIndex === 'logo'">
								        <a-image :width="32" :src="record.logo_url" />
							        </template>
                                    <template v-if="column.dataIndex === 'product_type'">
                                        <!-- {{ record.product }} -->
                                        {{
                                            record.product_type == "product"
                                                ? $t("common.product")
                                                : $t("common.service")
                                        }}
                                    </template>
                                    <template v-if="column.dataIndex === 'price'">
                                        {{ formatAmountCurrency(record.price) }}
                                    </template>
                                    <template v-if="column.dataIndex === 'action'">
                                        <a-button
                                            v-if="
                                                permsArray.includes(
                                                    'products_edit'
                                                ) || permsArray.includes('admin')
                                            "
                                            type="primary"
                                            @click="editItem(record)"
                                            style="margin-left: 4px"
                                        >
                                            <template #icon><EditOutlined /></template>
                                        </a-button>
                                        <a-button
                                            v-if="
                                                (permsArray.includes(
                                                    'products_delete'
                                                ) ||
                                                    permsArray.includes('admin')) &&
                                                (!record.children ||
                                                    record.children.length == 0)
                                            "
                                            type="primary"
                                            @click="showDeleteConfirm(record.xid)"
                                            style="margin-left: 4px"
                                        >
                                            <template #icon><DeleteOutlined /></template>
                                        </a-button>
                                    </template>
                                </template>
                            </a-table>
                        </div>
                    </a-col>
                </a-row>
            </a-card>
        </a-col>
    </a-row>
</template>

<script>
import { onMounted } from "vue";
import { PlusOutlined, EditOutlined, DeleteOutlined } from "@ant-design/icons-vue";
import crud from "../../../common/composable/crud";
import common from "../../../common/composable/common";
import AdminPageHeader from "../../../common/layouts/AdminPageHeader.vue";
import fields from "./fields";
import AddEdit from "./AddEdit.vue";

export default {
    components: {
        PlusOutlined,
        EditOutlined,
        DeleteOutlined,
        AddEdit,
        AdminPageHeader,
    },
    setup() {
        const { permsArray, appSetting, formatAmountCurrency } = common();
        const { url, addEditUrl, initData, columns, filterableColumns } = fields();
        const crudVariables = crud();

        onMounted(() => {
            crudVariables.tableUrl.value = {
                url,
            };
            crudVariables.table.filterableColumns = filterableColumns;

            crudVariables.fetch({
                page: 1,
            });

            crudVariables.crudUrl.value = addEditUrl;
            crudVariables.langKey.value = "product";
            crudVariables.initData.value = { ...initData };
            crudVariables.formData.value = { ...initData };
        });

        return {
            permsArray,
            appSetting,
            formatAmountCurrency,
            columns,
            ...crudVariables,
            filterableColumns,
        };
    },
};
</script>
