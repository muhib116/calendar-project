<template>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Invoice Id
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Request Date
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
                            156124
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                            Jan 7th, 2023
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                            Master Card
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                            ----
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                            $20
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                            Jan 29th, 2023
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap text-right">
                            <button class="bg-green-100 text-green-600 px-3 text-sm ">Active</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>