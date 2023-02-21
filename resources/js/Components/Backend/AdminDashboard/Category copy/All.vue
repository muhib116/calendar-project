<template>
    <div>
        <div class="flex gap-4 justify-between items-center">
            <div class="flex gap-2 items-center font-bold text-lg">
                <component :is="components['PageSize']" />
            </div>
            <button @click="activeComponent = 'Add'" class="px-4 py-1 rounded bg-sky-500 text-white font-bold">
                {{ Helper.translate('Add Ocassion') }}
            </button>
        </div>

        <div class="flex flex-col mt-4">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b whitespace-nowrap">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate('Ocassion') }}
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
                        {{ computedData }}
                        <tr v-for="(ocassion, index) in resultPerPage" :key="ocassion.id" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ Helper.translate(index+1, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(ocassion.name, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <span class="font-semibold" :class="ocassion.status ? 'text-green-500' : 'text-red-500'">
                                    {{ ocassion.status ? Helper.translate('Enabled') : Helper.translate('Disabled') }}
                                </span>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex justify-end gap-2">
                                <button @click="handleEdit(ocassion)" class="bg-gray-800 px-2 py-1 rounded text-white text-sm font-bold block">
                                    <EditIcon class="w-4 h-4" />
                                </button>
                                <button @click="deleteOcassion(ocassion.id)" class="bg-red-500 px-2 py-1 rounded text-white text-sm font-bold block">
                                    <CloseIcon class="w-4 h-4" />
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Alert v-if="isEmpty(data)" />
            </div>
            <component :is="components['Pagination']" />
        </div>
    </div>
</template>

<script setup>
import EditIcon from '@/Icons/EditIcon.vue'
import CloseIcon from '@/Icons/CloseIcon.vue'
import { usePage } from '@inertiajs/inertia-vue3'
import Helper from '@/Helper.js'
import { Inertia } from '@inertiajs/inertia'
import useOcassion from '@/Pages/Backend/AdminDashboard/useOcassion.js'
import useTable from '@/Components/Backend/Global/Table/useTable.js'
import Alert from '@/Components/Global/Alert.vue'
import { isEmpty } from 'lodash'
import { computed, onMounted, watch } from 'vue'

const { components, data, resultPerPage } = useTable()
const { activeComponent, selectedOcassion } = useOcassion()


watch(()=>{
    data.value = usePage().props.value.ocassions
})

const handleEdit = (ocassion) => {
    activeComponent.value = 'Edit'
    selectedOcassion.value = ocassion
}

const deleteOcassion = (id) => {
    Helper.confirm("Are you sure to delete?", ()=>{
        Inertia.delete(route('admin.ocassion.delete', id))
    })
}
</script>