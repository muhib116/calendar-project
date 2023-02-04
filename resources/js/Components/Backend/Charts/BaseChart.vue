<template>
    <div>
        <VueApexCharts 
            type="line" 
            :height="height" 
            :options="chartOptions" 
            :series="series"
        ></VueApexCharts>

    </div>
</template>

<script setup>
import { merge } from "lodash"
import { computed } from "vue"
import VueApexCharts from "vue3-apexcharts"

const colors = ['#F44336', '#E91E63', '#9C27B0', '#673AB7', '#3F51B5', '#2196F3', '#03A9F4', '#00BCD4', '#009688', '#43A047', '#7CB342', '#AFB42B', '#AFB42B', '#4E342E']
const props = defineProps({
    chartType: {
        chart: 'String',
        default: 'bar'
    },
    options: Object,
    height: {
        type: [String, Number],
        default: 100
    },
    series: [Array, Object],
    labels: [Array, Object],
    yaxisShow: {
        type: Boolean,
        default: true
    },
    legendPosition: {
        type: String, //top, bottom
        default: 'bottom'
    },
    title: {
        type: String,
        default: 'Title Goes Here'
    }
})

const chartOptions = computed(() => {
    return merge({
        chart: {
            type: 'line',
            stacked: false,
            toolbar: {
                show: false
            }
        },
        markers: {
            size: [6, 6],
            shape: 'circle',
            strokeColors: '#fff',
            colors,
        },
        dataLabels: {
            enabled: false
        },

        stroke: {
            width: [3, 3, 3, 3, 4],
            colors,
            curve: 'smooth'
        },
        fill: {
            colors
        },
        title: {
            text: 'Title goes here',
            align: 'left',
            offsetX: 0
        },

        xaxis: {
            categories: [],
            labels: {
                style: {
                    colors,
                    fontSize: 14
                }
            },
            axisBorder: {
                show: true,
                color: colors[0]
            },
        },
        yaxis: [
            {
                opposite: false,
                axisTicks: {
                    show: true,
                },
                axisBorder: {
                    show: true,
                    color: colors[0]
                },
                labels: {
                    style: {
                        colors,
                        fontSize: 14
                    }
                },
                title: {
                    // text: "Operating Cashflow (thousand crores)",
                    style: {
                        color: colors[0],
                    }
                },
            }
        ],
        legend: {
            horizontalAlign: 'center',
            markers: {
                width: 15,
                height: 15,
                strokeWidth: 0,
                strokeColor: 'transparent',
                fillColors: colors
            }
        },
        tooltip: {
            shared: true,
            style: {
                fontSize: '12px',
            }
        }
    }, props.options)
})
</script>