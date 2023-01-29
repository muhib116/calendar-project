<template>
    <div class="grid items-center w-full text-white">
        <div class="mx-auto mb-4">
            <Logo :light="true" class="text-4xl"/>
        </div>
        <div class="max-w-[600px] w-full mx-auto px-[5vw]">
            <input 
                type="search" 
                class="bg-white bg-opacity-10 block w-full border-2 border-[#fff] border-opacity-20 rounded-full px-6 py-3"
                placeholder="Search here..."
                autocomplete="off"
            />
        </div>
        <div class="">
            <button @click="languageModal = true" class="mx-auto block mt-10">
                <GlobIcon class="w-10 h-10 opacity-50 hover:opacity-100" />
            </button>

            <Modal v-model="languageModal" class="flex items-center justify-center">
                <LanguageChange @close="languageModal=false" />
            </Modal>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import Modal from '@/Components/Library/Modal.vue'
import GlobIcon from '@/Icons/GlobIcon.vue'
import LanguageChange from '@/Components/Global/LanguageChange.vue'
import Logo from '@/Components/Global/Logo.vue'

const languageModal = ref(false)
</script>

<style scoped>

</style>