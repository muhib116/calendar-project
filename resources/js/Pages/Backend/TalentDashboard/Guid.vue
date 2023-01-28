<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            This is guid page
        </template>
    </DashboardLayout>
</template>

<script setup>
    import DashboardLayout from '../DashboardLayout.vue'
    import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>