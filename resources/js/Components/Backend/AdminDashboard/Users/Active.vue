<template>
    <div>
        <div class="flex gap-4 justify-between">
            <div class="flex gap-2 items-center">
                Show 
                <select class="border-[#0001] rounded-lg">
                    <option value="10">10</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                Entries
            </div>
            <div class="flex gap-6 items-center w-full">
                <CInput type="search" placeholder="Search" class="mx-auto max-w-[400px] w-full" />
                <TabChanger />
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
                                Email
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="index in 10" :index="index" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ index }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <Link :href="route('admin.dashboard.user.detail', 1)" class="text-sky-500 font-medium">
                                    Demo User name
                                </Link>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                test@exm.com
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex justify-end gap-2">
                                <button class="bg-green-500 px-2 py-1 rounded text-white text-sm font-bold block">
                                    <EyeIcon class="w-4 h-4" />
                                </button>
                                <button class="bg-red-400 px-2 py-1 rounded text-white text-sm font-bold block">
                                    <CloseIcon class="w-4 h-4" />
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex items-center justify-between mt-5 text-sm">
            <div class="">Showing 1 to 10 of 10 entries</div>
            <div class="flex gap-2 items-center">
                <button>
                    <AngleLeftIcon class="w-4 h-4" />
                </button>
                1/2
                <button>
                    <AngleRightIcon class="w-4 h-4" />
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import CloseIcon from '@/Icons/CloseIcon.vue'
import CInput from '@/Components/Global/CInput.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import EyeIcon from '@/Icons/EyeIcon.vue'
import TabChanger from '@/Components/Backend/AdminDashboard/Users/TabChanger.vue'
</script>

<style scoped>

</style>