<template>
    <header class="bg-[var(--header-bg-color)] text-white px-4 py-4 sticky top-0 z-50">
        <div class="navWrapper container mx-auto text-white items-center relative">
            <Navigation class="w-10" />

            <div class="grid text-center gap-2">
                <Logo :light="true"/>
            </div>

            <div class="flex gap-4 items-center justify-end">
                <button @click="showSearchBox=true" class="">
                    <SearchIcon />
                </button>
                <Notification />
                <Profile />
            </div>
            <div v-if="showSearchBox" class="searchbox absolute top-0 left-0 right-0 bg-white text-black h-full flex items-center">
                <label class="container mx-auto block relative">
                    <input type="search" placeholder="Search..." class="w-full block border-0" />
                    <button @click="showSearchBox=false" class="absolute right-2 top-1/2 transform -translate-y-1/2">
                        <CloseIcon class="w-4 h-4" />
                    </button>
                </label>
            </div>
        </div>
    </header>
</template>

<script setup>
import { ref } from 'vue'
import Navigation from '@/Components/Backend/Global/Components/Navigation.vue'
import Notification from '@/Components/Backend/Global/Components/Notification.vue'
import Profile from '@/Components/Backend/Global/Components/Profile.vue'
import CInput from '@/Components/Global/CInput.vue'
import Logo from '@/Components/Global/Logo.vue'
import CloseIcon from '@/Icons/CloseIcon.vue'
import SearchIcon from '@/Icons/SearchIcon.vue'

const showSearchBox = ref(false)
</script>

<style scoped>
    .navWrapper{
        display: grid;
        grid-template-columns: 100px 1fr 100px;
    }

    @media all and (max-width: 480px){
        .navWrapper{
            display: grid;
            grid-template-columns: 50px 1fr 120px;
        }
        .logo{
            font-size: 20px;
        }
    }
</style>