<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <div class="flex gap-6 border rounded p-4 mb-2">
                <div class="w-full">
                    <h1 class="text-sm font-bold">Start Date</h1>
                    <CInput type="date" />
                </div>
                <div class="w-full">
                    <h1 class="text-sm font-bold">End Date</h1>
                    <CInput type="date" />
                </div>
                <div class="w-full">
                    <h1 class="text-sm font-bold">Filter</h1>
                    <CSelect :options="filterOptions" v-model="filterOptions[0].key" />
                </div>
            </div>
            <Widget />
            <Chart />
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import Widget from '@/Components/Backend/TalentDashboard/Analytics/Widget.vue'
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import Chart from '@/Components/Backend/TalentDashboard/Analytics/Chart.vue'

const filterOptions = [
    {
        key: 'last 7days',
        value: 'Last 7Days'
    },
    {
        key: 'last 30days',
        value: 'Last 30Days'
    },
    {
        key: 'last Month',
        value: 'Last Month'
    },
]
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>