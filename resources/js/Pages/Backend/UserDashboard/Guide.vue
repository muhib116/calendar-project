<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            This is guide page
        </template>
    </DashboardLayout>
</template>

<script setup>
    import DashboardLayout from '../DashboardLayout.vue'
    import LeftSide from '@/Components/Backend/UserDashboard/LeftSide.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>