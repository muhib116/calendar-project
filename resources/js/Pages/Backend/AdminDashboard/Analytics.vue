<template>
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

            <VueApexCharts
                height="500"
                type="bar"
                :options="chartOptions"
                :series="series"
            ></VueApexCharts>
        </template>
    </DashboardLayout>
</template>

<script setup>
import VueApexCharts from "vue3-apexcharts"
import DashboardLayout from './DashboardLayout.vue'
import LeftSide from '@/Components/Backend/AdminDashboard/LeftSide.vue'
import Widget from "@/Components/Backend/AdminDashboard/Dashboard/Widget.vue"
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'

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

const chartOptions = {
    chart: {
        id: "vuechart-example",
    },
    xaxis: {
        categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998],
    },
}
const series = [
    {
        name: "series-1",
        data: [30, 40, 35, 50, 49, 60, 70, 91],
    },
]
</script>


<style scoped>
</style>