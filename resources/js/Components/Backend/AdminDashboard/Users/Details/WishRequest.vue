<template>
    <h2 class="font-semibold text-right mb-2">Wish total amount (fees): <span class="text-sky-500">$60 ($3)</span></h2>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="border-b whitespace-nowrap">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        #
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Date & Time
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Talent Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Amount Paid
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                        Fees
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="index in 3" :index="index" class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ index }}
                    </td>
                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                        Fab 29, 2023 12:05:02
                    </td>
                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                        Demo Talent Name
                    </td>
                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                        $150
                    </td>
                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex justify-end gap-2">
                        $5
                    </td>
                </tr>
            </tbody>
        </table>
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
</template>

<script setup>
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue';
import AngleRightIcon from '@/Icons/AngleRightIcon.vue';
</script>

<style scoped>

</style>