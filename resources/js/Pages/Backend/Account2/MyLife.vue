<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-6">
                        <div class="flex gap-2 mb-4">
                            <button 
                                @click="currentComponent = 'Setup'" 
                                class="font-semibold border rounded px-4 py-1"
                                :class="currentComponent == 'Setup' && 'bg-sky-500 text-white'"
                            >
                                Set Up
                            </button>
                            <button 
                                @click="currentComponent = 'Manage'" 
                                class="font-semibold border rounded px-4 py-1"
                                :class="currentComponent == 'Manage' && 'bg-sky-500 text-white'"
                            >
                                Add/Manage
                            </button>
                            <button class="font-semibold border rounded px-4 py-1">Preview</button>
                        </div>
                        <div class="mt-10">
                            <component :is="components[currentComponent]" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import { ref } from 'vue';
import Master from '../Master.vue'
import LeftSide from '@/Components/Backend/Account2/LeftSide.vue'
import useMyLife from '@/Pages/Backend/Account2/useMyLife.js'

const currentComponent = ref('Setup')
const { components } = useMyLife()
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>