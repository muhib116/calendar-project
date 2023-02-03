<template>
    <div>
        <button @click="activeComponent = 'Applications'" class="flex items-center gap-2 mb-4 bg-gray-500 p-1 px-2 pr-3 font-semibold rounded text-white">
            <AngleLeftIcon class="w-4 h-4" />
            Back
        </button>
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
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Verification
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="index in 10" :index="index" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ index }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Demo User name
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Jhon
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Doe
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                test@exm.com
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                USA
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                http://social.com/username
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                Actress
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <span class="font-bold text-red-600 px-3 text-sm">Declined</span>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex gap-0">
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
import CloseIcon from '@/Icons/CloseIcon.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import useTalentApplications from '@/Pages/Backend/AdminDashboard/useTalentApplications.js'

const { activeComponent } = useTalentApplications()
</script>

<style scoped>
</style>