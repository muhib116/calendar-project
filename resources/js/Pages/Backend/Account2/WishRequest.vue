<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-6">
                        <h1 class="text-lg">
                            Please setup a <strong>yearly</strong> subscription price (min $30/year)
                        </h1>
                    
                        <div class="grid gap-6">
                            <h2 class="font-bold mt-5">Enter Amount</h2>
                            <div class="flex gap-10 w-full lg:w-1/2">
                                <CInput placeholder="Amount" class="w-full"/>
                                <button class="bg-red-500 text-white font-bold px-4 py-2 rounded">Update/Save</button>
                            </div>
                            <div class="grid items-center gap-2">
                                <h2 class="font-bold mt-5">Active</h2>
                                <Switch class="font-bold"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
import LeftSide from '@/Components/Backend/Account2/LeftSide.vue'
import CInput from '@/Components/Global/CInput.vue'
import Switch from '@/Components/Global/Switch.vue'
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>