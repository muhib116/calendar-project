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
                                {{ Helper.translate('Username') }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate('First Name') }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate('Last Name') }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate('Email') }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate('Country') }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate('Social Link') }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate('Category') }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate('Verification') }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                {{ Helper.translate('Files') }}
                            </th> 
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                {{ Helper.translate('Show frontend') }}
                            </th> 
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                {{ Helper.translate('Action') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in resultPerPage" :key="index" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ Helper.translate(index+1, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <Link :href="route('admin.talent.detail', item.id)" class="text-sky-500 font-medium">
                                    {{ Helper.translate(item.username, true) }}
                                </Link>
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
                                {{ Helper.translate(get(item, 'country.name'), true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <template v-if="item.status">
                                    Verified
                                </template>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <span v-if="file_access" class="text-green-500">Access</span>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <button @click="handleFeatured(item.id)" v-if="item.is_featured" class="bg-green-100 rounded py-1 px-2">Show</button>
                                <button @click="handleFeatured(item.id)" v-else class="bg-red-100 rounded py-1 px-2">Hidden</button>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap font-semibold">
                                <div class="flex gap-2 justify-end">
                                    <Link :href="route('admin.talent.detail', item.id)" class="bg-green-500 px-2 py-1 rounded text-white text-sm font-bold block">
                                        <EyeIcon class="w-4 h-4" />
                                    </Link>
                                    <button @click="handleDeleteUser(item.id)" class="bg-red-500 px-2 py-1 rounded text-white text-sm font-bold block">
                                        <CloseIcon class="w-4 h-4" />
                                    </button>
                                </div>
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
import { Link } from '@inertiajs/inertia-vue3'
import CInput from '@/Components/Global/CInput.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import EyeIcon from '@/Icons/EyeIcon.vue'
import useTable from '@/Components/Backend/Global/Table/useTable.js'
import TabChanger from '@/Components/Backend/AdminDashboard/Talents/TabChanger.vue'

import { usePage } from '@inertiajs/inertia-vue3'
import CloseIcon from '@/Icons/CloseIcon.vue'
import Helper from '@/Helper'
import { computed } from 'vue'
import { get } from 'lodash'
import { Inertia } from '@inertiajs/inertia'

const { components, data, resultPerPage, search } = useTable()

const talents = computed(() => {
    data.value = usePage().props.value.talents
    console.log(data.value[0]);
    return data.value
})
const deletedTalents = computed(() => { 
    return usePage().props.value.deletedTalents 
})

const handleDeleteUser = (id) => {
    Helper.confirm("Are you sure to delete?", ()=>{
        Inertia.delete(route('admin.delete_user', id))
    })
}

const handleFeatured = (id) => {
    Helper.confirm("Are you sure change this?", ()=>{
        Inertia.post(route('admin.visibility', id))
    })
}

</script>

<style scoped>

</style>