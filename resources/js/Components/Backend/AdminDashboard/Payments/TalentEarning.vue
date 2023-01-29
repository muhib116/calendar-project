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
                    <button class="font-semibold border bg-blue-500 text-white rounded px-4 py-1">Custom</button>
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
                                Talents
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Total Payments Received
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Total Revenue Gross <span class="text-green-500">(net)</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="index in 5" :index="index" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ index }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Demo Talents
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                5
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                10%
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
</script>

<style lang="scss" scoped>

</style>