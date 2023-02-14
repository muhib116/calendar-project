<template>
    <div>
        <div class="flex gap-4 justify-between">
            <div class="flex gap-2 items-center">
                <component :is="components['PageSize']" />
            </div>
            <div class="flex gap-6 items-center w-full">
                <component :is="components['Search']" />
                <TabChanger :activeItems="talents.length" :deleteItem="deletedTalents.length" />
            </div>  
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
                                Username
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                First Name
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Last Name
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Email
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Country
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Social Link
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Category
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                Deleted By
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in resultPerPage" :key="index" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ Helper.translate(index+1, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(item.username, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(item.first_name, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(item.last_name, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(item.email, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(get(item, 'country.name'), true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(item.link, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(get(item, 'category.name'), true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex gap-2">
                                {{ Helper.translate(item.deleted_by, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap font-semibold">
                                {{ Helper.dateFormate(item.deleted_at) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <component :is="components['Pagination']" />
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import EyeIcon from '@/Icons/EyeIcon.vue'
import useTable from '@/Components/Backend/Global/Table/useTable.js'
import TabChanger from '@/Components/Backend/AdminDashboard/Talents/TabChanger.vue'
import Helper from '@/Helper'
import { computed } from 'vue'
import { get } from 'lodash'
import { usePage } from '@inertiajs/inertia-vue3'


const { components, data, resultPerPage, search } = useTable()

const talents = computed(() => {
    return usePage().props.value.talents
})
const deletedTalents = computed(() => {
    data.value = usePage().props.value.deletedTalents
    return data.value
})

</script>

<style scoped>

</style>