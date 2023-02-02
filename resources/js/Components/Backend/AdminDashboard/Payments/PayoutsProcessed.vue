<template>
    <div class="">
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
            <div class="w-full">
                <CInput type="search" placeholder="Search" class="max-w-[400px] mx-auto" />
            </div>
            <div class="flex gap-4 items-center">
                <div class="flex gap-4 items-center">
                    <button class="font-semibold border rounded px-4 py-1 bg-blue-500 text-white">Paid</button>
                    <button class="font-semibold border rounded px-4 py-1">Canceled</button>
                </div>
                <button class="w-6">
                    <SortIcon class="w-5 h-5 ml-auto" />
                </button>
            </div>
        </div>

        <div class="flex flex-col mt-4">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Invoice ID
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Request Date
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Username/Name
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Payment Method
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Payment Info
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Amount
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Payment Date
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="index in 5" :index="index" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ index }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ Math.floor(Math.random() * 200) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Jan 29th, 2023
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Demo Name
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Stripe / Bank
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <span class="mr-2">
                                    Bank Name / Stripe Mail
                                </span>
                                <button class="text-[10px] bg-gray-500 text-white rounded-full p-1 ml-auto" title="See Bank Details">
                                    <InfoIcon class="w-3 h-3" />
                                </button>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                ${{ Math.floor(Math.random() * 200) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Fab 6th, 2023
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap text-right">
                                <button class="bg-green-100 text-green-600 px-3 text-sm">Paid</button>
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
import CInput from '@/Components/Global/CInput.vue'
import SortIcon from '@/Icons/SortIcon.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import InfoIcon from '@/Icons/InfoIcon.vue';
</script>

<style lang="scss" scoped>

</style>