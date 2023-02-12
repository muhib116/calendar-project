<template>
    <div>
        <div class="flex gap-4 justify-between">
            <div class="flex gap-2 items-center">
                <component :is="components['PageSize']" />
            </div>
            <div class="flex gap-6 items-center w-full">
                <component :is="components['Search']" />
                <TabChanger :activeItems="users.length" :deleteItems="deleteUsers.length" />
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
                                {{ Helper.translate("Username") }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ Helper.translate("Email") }}
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                {{ Helper.translate("Action") }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(user, index) in resultPerPage" :key="index" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ index + 1 }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <Link :href="route('admin.user.detail', user.id)" class="text-sky-500 font-medium">
                                    {{ Helper.translate(user.name, true) }}
                                </Link>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Helper.translate(user.email, true) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex justify-end gap-2">
                                <Link :href="route('admin.user.detail', user.id)" class="bg-green-500 px-2 py-1 rounded text-white text-sm font-bold block">
                                    <EyeIcon class="w-4 h-4" />
                                </Link>
                                <button class="bg-red-400 px-2 py-1 rounded text-white text-sm font-bold block">
                                    <CloseIcon @click="handleDeleteUser(user.id)" class="w-4 h-4" />
                                </button>
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
import TabChanger from '@/Components/Backend/AdminDashboard/Users/TabChanger.vue'
import useTable from '@/Components/Backend/Global/Table/useTable.js'
import { usePage } from '@inertiajs/inertia-vue3'
import { Link, Route } from '@inertiajs/inertia-vue3'
import CloseIcon from '@/Icons/CloseIcon.vue'
import { Inertia } from '@inertiajs/inertia'
import EyeIcon from '@/Icons/EyeIcon.vue'
import { computed, onMounted, watch } from 'vue'
import { cloneDeep } from 'lodash'
import Helper from '@/Helper'

const { components, data, resultPerPage, search } = useTable()

const deleteUsers = computed(() => {
    return usePage().props.value.deletedUsers;
});

const users = computed(() => {
    data.value = usePage().props.value.users;
    search();
    return usePage().props.value.users;
});

watch(users.value, ()=> {
    console.log(users.value);
}, {
    deep: true
})

data.value = usePage().props.value.users;

const handleDeleteUser = (id) => {
    Helper.confirm("Are you sure to delete?", ()=>{
        Inertia.delete(route('admin.delete_user', id))
    });
}

</script>