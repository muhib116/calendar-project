<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <Widget />

            <div class="flex justify-between items-center mt-10">
                <h1 class="font-semibold">Payout History</h1>
                <button @click="payoutModal = true" class="bg-red-500 px-4 py-1 rounded text-white font-semibold">Request Payout</button>
            </div>
            <Modal v-model="payoutModal">
                <PayoutRequest @close="payoutModal = false" />
            </Modal>

            <Table class="border border-b-0" />
            <!-- requests -->
            <div class="flex flex-col mt-4">
                <div class="overflow-x-auto">
                    <table class="w-full" v-if="!isEmpty(data)">
                        <thead class="border-b whitespace-nowrap">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    {{ Helper.translate('Invoice Id') }}
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    {{ Helper.translate('Request Date') }}
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    {{ Helper.translate('Payment Method') }}
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    {{ Helper.translate('Payment Info') }}
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    {{ Helper.translate('Amount') }}
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    {{ Helper.translate('Payment Date') }}
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    {{ Helper.translate('Status') }}
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                    {{ Helper.translate('Action') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr v-for="(request, index) in resultPerPage" :key="request.id" class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ Helper.translate(index + 1, true) }}
                                </td>
                                <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                    {{ Helper.translate(request.name, true) }}
                                </td>
                                <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                    <span class="font-semibold" :class="category.status ? 'text-green-500' : 'text-red-500'">
                                        {{ category.status ? Helper.translate('Enabled') : Helper.translate('Disabled') }}
                                    </span>
                                </td>
                                <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                    <strong v-if="category.parent">
                                        {{ Helper.translate(category.parent.name, true) }}
                                    </strong>
                                </td>
                                <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex justify-end gap-2">
                                    <button @click="handleEdit(category)" class="bg-gray-800 px-2 py-1 rounded text-white text-sm font-bold block">
                                        <EditIcon class="w-4 h-4" />
                                    </button>
                                    <button @click="deleteCategory(category.id)" class="bg-red-500 px-2 py-1 rounded text-white text-sm font-bold block">
                                        <CloseIcon class="w-4 h-4" />
                                    </button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                    <Alert v-if="isEmpty(data)" />
                </div>
                <component :is="components['Pagination']" />
            </div>

            <!-- <div class="flex justify-between items-center mt-4">
                    <h3 class="">Showing 1 to 3 of 3 entries</h3>
                    <div class="flex gap-4">
                        <button class="border px-2">
                            <svg class="w-4" width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m19.031 4.281-11 11-.687.719.687.719 11 11 1.438-1.438L10.187 16 20.47 5.719Z"/></svg>
                        </button>
                        <button class="border px-2">
                            <svg class="w-4" width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M12.969 4.281 11.53 5.72 21.812 16l-10.28 10.281 1.437 1.438 11-11 .687-.719-.687-.719Z"/></svg>
                        </button>
                    </div>
                </div> -->
        </template>
    </DashboardLayout>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import Table from '@/Components/Backend/TalentDashboard/Payout/Table.vue'
import Widget from '@/Components/Backend/TalentDashboard/Payout/Widget.vue'
import Modal from '@/Components/Library/Modal.vue'
import PayoutRequest from '@/Pages/Backend/TalentDashboard/PayoutRequest.vue'
import useTable from '@/Components/Backend/Global/Table/useTable.js'
import { usePage } from '@inertiajs/inertia-vue3'
import { isEmpty } from 'lodash'
import Helper from '@/Helper'

const { components, data, resultPerPage } = useTable()

const payoutModal = ref(false)

const props = defineProps({
    requests: {
        type: Array,
        default: []
    }
})

onMounted(() => {
    data.value = usePage().props.value.requests
});


</script>


<style scoped>
.content {
    grid-template-columns: 250px 1fr;
}
</style>