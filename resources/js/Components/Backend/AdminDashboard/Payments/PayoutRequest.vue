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
            <div class="flex gap-4 items-center w-full">
                <CInput type="search" placeholder="Search" class="ml-auto" />
                <button class="w-6">
                    <SortIcon class="w-5 h-5 ml-auto" />
                </button>
            </div>
        </div>

        <div class="flex flex-col mt-4">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b whit">
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
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Status
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Proceed
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Cancel
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
                                Master Card
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Info
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                ${{ Math.floor(Math.random() * 200) }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Fab 6th, 2023
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <button class="bg-green-200 px-3 text-sm font-bold">Active</button>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <button class="bg-sky-500 px-4 py-1 rounded text-white text-sm font-bold">Pay now</button>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <button class="bg-red-400 px-2 py-2 rounded-full text-white text-sm font-bold ml-auto block">
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
import CInput from '@/Components/Global/CInput.vue'
import SortIcon from '@/Icons/SortIcon.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import CloseIcon from '@/Icons/CloseIcon.vue'
</script>

<style lang="scss" scoped>

</style>