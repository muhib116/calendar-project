<template>
    <Master>
        <div class="wrapper grid h-[100vh] overflow-y-auto">
            <div class="p-4 bg-[#0b021a] relative flex items-center justify-center h-full">
                <CanvasMenu />
                <Search class="absolute top-[250px]" />
            </div>

            <div class="py-10 px-8 bg-[#1c2130] text-white relative">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="font-black text-2xl">Calendars & Special videos</h1>
                        <h2 class="text-white text-opacity-30 text-xl">For any occasion, from your preferred personality</h2>
                    </div>
                    <div>
                        <!-- <button 
                            @click="showAuthModal = true" 
                            class="font-black lg:px-6 px-3 py-2 border border-white border-opacity-50 text-white text-opacity-60 hover:text-opacity-100 rounded-full"
                        >
                            Sign Up
                        </button> -->
                        <!-- after login -->
                        <div class="flex gap-4 items-center justify-end">
                            <Notification />
                            <Profile />
                        </div>
                    </div>
                </div>

                <div class="grid mb-8 relative">
                    <div class="absolute w-full top-1/2 left-0 right-0 flex justify-between">
                        <button class="-ml-5 opacity-50 hover:opacity-100">
                            <AngleLeftIcon />
                        </button>
                        <button class="-mr-5 opacity-50 hover:opacity-100">
                            <AngleRightIcon />
                        </button>
                    </div>
                    <div class="grid mt-10 gap-5 px-[30px]">
                        <CategoryWiseLatestItem title="Actors" />
                        <CategoryWiseLatestItem title="Artists"/>
                    </div>

                </div>
                <Footer class="mt-20 absolute bottom-0 left-0 w-full"/>
            </div>
        </div>

        <Modal v-model="showAuthModal">
            <CustomAuth @close="showAuthModal = false" />
        </Modal>
    </Master>
</template>

<script setup>
import { ref } from 'vue'
import Master from '@/Components/Frontend/Master.vue';
import CategoryWiseLatestItem from '@/Components/Frontend/CategoryWiseLatestItem.vue'
import Search from '@/Components/Frontend/Home/Search.vue'
import CanvasMenu from '@/Components/Frontend/Home/CanvasMenu.vue'
import Modal from '@/Components/Library/Modal.vue'
import CustomAuth from '@/Components/Frontend/CustomAuth/Index.vue'
import Notification from '@/Components/Backend/Global/Components/Notification.vue'
import Profile from '@/Components/Backend/Global/Components/Profile.vue'
import Footer from '@/Components/Backend/Global/Footer.vue'
import BackIcon from '@/Icons/BackIcon.vue';
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue';
import AngleRightIcon from '@/Icons/AngleRightIcon.vue';

const showAuthModal = ref(false)
</script>

<style scoped>
    .wrapper{
        grid-template-columns: 2fr 3fr;
    }
</style>