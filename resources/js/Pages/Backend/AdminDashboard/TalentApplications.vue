<template>
    <DashboardLayout :header="false" :footer="false" title="Talent Applications">
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
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
                        <button class="px-4 py-1 rounded bg-red-400 text-white font-bold">
                            Application declined
                        </button>
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
                                        Approved/Decline
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
                                        <button @click="showModal = true" class="mx-auto block btn_ripple" title="See Talent Video.">
                                            <PlayIcon class="" />
                                        </button>
                                        <!-- <button class="bg-green-100 text-green-600 px-3 text-sm">Verified</button> -->
                                    </td>
                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex gap-0">
                                        <button class="bg-green-500 px-2 py-2 rounded-full text-white text-sm font-bold ml-auto block">
                                            <CheckIcon class="w-4 h-4" />
                                        </button>
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
    </DashboardLayout>
    <Modal v-model="showModal">
        <div class="relative p-2 pt-8 bg-white w-[450px]">
            <button @click="showModal = false" class="absolute top-2 right-2 text-red-500">
                <CloseIcon class="w-4 h-4" />
            </button>
            <div class="">
                <img src="https://images.unsplash.com/photo-1675277456530-ffdfd0ff8548?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="flex gap-4 justify-center mt-2 font-semibold">
                <button class="px-4 py-1 bg-green-600 text-white rounded shadow">Approved</button>
                <button class="px-4 py-1 bg-red-400 text-white rounded shadow">Decline</button>
            </div>
        </div>
    </Modal>
</template>

<script setup>
import { ref } from 'vue'
import DashboardLayout from './DashboardLayout.vue'
import LeftSide from '@/Components/Backend/AdminDashboard/LeftSide.vue'
import CloseIcon from '@/Icons/CloseIcon.vue'
import CheckIcon from '@/Icons/CheckIcon.vue'
import CInput from '@/Components/Global/CInput.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import PlayIcon from '@/Icons/PlayIcon.vue'
import Modal from '@/Components/Library/Modal.vue'

const showModal = ref(false)
</script>


<style scoped>
.btn_ripple {
    border: none;
    outline: none;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: block;
    background-color: #e73212;
    color: #fff;
    display: grid;
    place-items: center;
    font-size: 18px;
    cursor: pointer;

    animation-name: ripple;
    animation-duration: 1.5s;
    animation-iteration-count: infinite;
}


@keyframes ripple {
    0% {
        box-shadow: 0 0 0 0 #0002, 0 0 0 0 #0002;
    }

    80% {
        box-shadow: 0 0 0 10px #0000, 0 0 0 20px #0000;
    }

    100% {
        box-shadow: 0 0 0 0 #0000, 0 0 0 0 #0000;
    }
}
</style>