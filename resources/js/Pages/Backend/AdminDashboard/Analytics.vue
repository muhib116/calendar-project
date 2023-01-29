<template>
    <DashboardLayout :header="false" :footer="false" title="Analytics">
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <h1 class="font-bold text-lg">Analytics Page</h1>
        </template>
    </DashboardLayout>
</template>

<script setup>
    import DashboardLayout from './DashboardLayout.vue'
    import LeftSide from '@/Components/Backend/AdminDashboard/LeftSide.vue'
</script>


<style scoped>
</style>