<template>
    <DashboardLayout :header="false" :footer="false" title="Talent Detail">
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <Link :href="route('admin.dashboard.users')" class="p-1 px-3 pr-4 rounded bg-gray-500 text-white inline-flex items-center w-fit gap-2">
                <AngleLeftIcon class="w-4 h-4" />
                Back
            </Link>
            <div class="grid user_detail_wrapper h-full">
                <div class="border p-4 h-full overflow-y-auto">
                    <h1 class="font-semibold">Talent: Talent's Name</h1>
                    <div class="flex flex-col justify-between min-h-[460px] mt-4">
                        <div class="grid gap-2 text-sm">
                            <button 
                                @click="detailsActiveComponent = 'WishSent'"
                                class="border px-2 py-1 rounded w-full text-left"
                                :class="detailsActiveComponent == 'WishSent' && 'bg-gray-100'"
                            >
                                Wish Sent
                            </button>
                            <button 
                                @click="detailsActiveComponent = 'CalendarsPosted'"
                                class="border px-2 py-1 rounded w-full text-left"
                                :class="detailsActiveComponent == 'CalendarsPosted' && 'bg-gray-100'"
                            >
                                Calendars Posted
                            </button>
                            <button 
                                @click="detailsActiveComponent = 'MyLifeVideos'"
                                class="border px-2 py-1 rounded w-full text-left"
                                :class="detailsActiveComponent == 'MyLifeVideos' && 'bg-gray-100'"
                            >
                                My Life Videos
                            </button>
                            <button 
                                @click="detailsActiveComponent = 'ChangePassword'"
                                class="border px-2 py-1 rounded w-full text-red-500 text-left mt-5"
                                :class="detailsActiveComponent == 'ChangePassword' && 'bg-red-500 text-gray-50 font-medium'"
                            >
                                Change Password
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border border-l-0 p-4">
                    <component :is="detailsComponents[detailsActiveComponent]" />
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from './DashboardLayout.vue'
import LeftSide from '@/Components/Backend/AdminDashboard/LeftSide.vue'
import useTalents from '@/Pages/Backend/AdminDashboard/useTalents.js'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import { Link } from '@inertiajs/inertia-vue3';

const { detailsComponents, detailsActiveComponent } = useTalents()
</script>


<style scoped>
    .user_detail_wrapper{
        grid-template-columns: 250px calc(100% - 250px);
    }
</style>