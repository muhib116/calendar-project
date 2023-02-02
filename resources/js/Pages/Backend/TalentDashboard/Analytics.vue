<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <VueApexCharts
                width="500"
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