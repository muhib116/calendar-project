<template>
    <div class="grid grid-cols-3 uppercase gap-6 font-semibold text-lg">
        <div 
            @click="activeComponent = 'PayoutRequest'" 
            class="relative p-4 rounded-lg border text-center cursor-pointer hover:bg-sky-500 hover:text-white hover:shadow-lg transition-all"
            :class="activeComponent == 'PayoutRequest' && 'bg-sky-500 text-white'"
        >
            <span class="absolute right-0 top-0 transform translate-x-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-red-400 text-white text-[10px] font-semibold flex items-center justify-center">18</span>
            Payouts Request
        </div>
        <div
            @click="activeComponent = 'PayoutsProcessed'" 
            class="relative p-4 rounded-lg border text-center cursor-pointer hover:bg-sky-500 hover:text-white hover:shadow-lg transition-all"
            :class="activeComponent == 'PayoutsProcessed' && 'bg-sky-500 text-white'"
        >
            <!-- <span class="absolute right-0 top-0 transform translate-x-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-red-500 text-white text-[10px] font-semibold flex items-center justify-center">18</span> -->
            Payouts Processed
        </div>
        <div 
            @click="activeComponent = 'TalentEarning'" 
            class="relative p-4 rounded-lg border text-center cursor-pointer hover:bg-sky-500 hover:text-white hover:shadow-lg transition-all"
            :class="activeComponent == 'TalentEarning' && 'bg-sky-500 text-white'"
        >
            <!-- <span class="absolute right-0 top-0 transform translate-x-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-red-500 text-white text-[10px] font-semibold flex items-center justify-center">18</span> -->
            Talents Earnings
        </div>
    </div>
</template>

<script setup>
import usePayments from '@/Pages/Backend/AdminDashboard/usePayments.js'

const { activeComponent } = usePayments()
</script>

<style lang="scss" scoped>

</style>