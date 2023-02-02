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
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import VueApexCharts from "vue3-apexcharts"
import Widget from '@/Components/Backend/TalentDashboard/Analytics/Widget.vue';
import CInput from '@/Components/Global/CInput.vue';

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
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>