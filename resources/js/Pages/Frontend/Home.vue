<template>
    <Master>
        <div class="grid grid-cols-2 h-[100vh] overflow-y-auto">
            <div class="p-4 bg-[#0b021a] relative flex items-center justify-center">
                <CanvasMenu />
                <Search />
            </div>
            <div class="py-10 px-8 bg-[#1c2130] text-white">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="font-black text-2xl">Calendars & Special videos</h1>
                        <h2 class="text-white text-opacity-30 text-xl">For any occasion, from your preferred personality</h2>
                    </div>
                    <div>
                        <button @click="showModal = true" class="font-black px-6 py-2 border border-white border-opacity-50 text-white text-opacity-60 hover:text-opacity-100 rounded-full">
                            Sign Up / Login
                        </button>
                    </div>
                </div>

                <div class="grid">
                    <div class="grid mt-20 gap-5 px-[30px]">
                        <CategoryWiseItem />
                        <CategoryWiseItem />
                    </div>

                </div>
                <Footer class="mt-20"/>
            </div>
        </div>

        <Modal v-model="showModal">
            <CustomAuth @close="showModal = false" />
        </Modal>
    </Master>
</template>

<script setup>
import { ref } from 'vue'
import Master from '@/Components/Frontend/Master.vue';
import CategoryWiseItem from '@/Components/Frontend/CategoryWiseItem.vue'
import Search from '@/Components/Frontend/Home/Search.vue'
import CanvasMenu from '@/Components/Frontend/Home/CanvasMenu.vue'
import Modal from '@/Components/Library/Modal.vue'
import CustomAuth from '@/Components/Frontend/CustomAuth/Index.vue'
import Footer from '@/Components/Backend/Global/Footer.vue'

const showModal = ref(false)
</script>

<style lang="scss" scoped>

</style>