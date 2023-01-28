<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <div class="grid grid-cols-2 gap-6">
                <div class="border p-6">
                    <h1 class="font-semibold text-xl mb-4">Personal Information</h1>
                    <CInput type="text" placeholder="Username" />
                    <CInput type="text" placeholder="First Name" />
                    <CInput type="text" placeholder="Last Name" />
                    <CInput type="email" placeholder="Email Name" />
                    <button class="bg-red-500 px-4 py-1 rounded text-white font-bold mt-4 ml-auto block">Update</button>
                </div>
                <div class="border p-6">
                    <h1 class="font-semibold text-xl mb-4">Change Password</h1>
                    <CInput type="text" placeholder="Old Password" />
                    <CInput type="text" placeholder="New Password" />
                    <CInput type="text" placeholder="Confirm Password" />
                    <button class="bg-red-500 px-4 py-1 rounded text-white font-bold mt-4 ml-auto block">Save</button>
                </div>
            </div>
            
            <div class="bg-red-50 p-4 py-6 mt-4">
                <h1 class="font-semibold text-xl mb-4 text-center">Delete Account</h1>
                <div class="flex justify-center gap-6">
                    <button class="bg-gray-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit mt-4">
                        No
                    </button>
                    <button class="bg-red-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit mt-4">
                        Yes
                    </button>
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import CInput from '@/Components/Global/CInput.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>