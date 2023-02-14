<template>
    <Head title="Analytics"/>
    <DashboardLayout :header="false" :footer="false" title="Analytics">
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
import DashboardLayout from './DashboardLayout.vue'
import LeftSide from '@/Components/Backend/AdminDashboard/LeftSide.vue'
import Widget from "@/Components/Backend/AdminDashboard/Dashboard/Widget.vue"
import Chart from "@/Components/Backend/AdminDashboard/Analytics/Chart.vue"
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import { Head } from '@inertiajs/inertia-vue3'

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
</style>