<template>
    <div>
        <BaseChart
            :height="300"
            :series="series"
            :options="options"
        />
    </div>
</template>

<script setup>
import BaseChart from "@/Components/Backend/Charts/BaseChart.vue";

const series = [
    {
        name: 'Income',
        type: 'line',
        data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
    },
    {
        name: 'Loss',
        type: 'bar',
        data: [2.4, 2, 3.5, 5.5, 1.5, 4.8, 6.8, 4.6]
    },
    {
        name: 'Profit',
        type: 'line',
        data: [8.4, 5, 2.5, 9.5, 4.5, 2.8, 4.8, 8.6]
    }
]

const options = {
    title: {
        text: 'Analytics',
        align: 'left',
        offsetX: 0
    },
    legend: {
        show: true
    },
    dataLabels : {
        enabled: false
    },
    xaxis: {
        categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
    }
}
</script>

<style lang="scss" scoped>

</style>