<template>
    <div>
        <PolarBaseChart
            height="300"
            :series="series"
            :labels="labels"
            :options="options"
        />
    </div>
</template>

<script setup>
import PolarBaseChart from "@/Components/Backend/Charts/PolarBaseChart.vue";

const series = [4200, 3070, 5200]
const labels = ['Visitor By Country', 'User By Country', 'Talents By Country']
const options = {
    labels,
    title: {
        text: '',
        align: 'left'
    }
}
</script>

<style lang="scss" scoped>

</style>