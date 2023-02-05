<template>
    <DashboardLayout :header="false" :footer="false" title="Category Management">
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <component :is="components[activeComponent]" />
        </template>
    </DashboardLayout>
</template>

<script setup>
    import DashboardLayout from './DashboardLayout.vue'
    import LeftSide from '@/Components/Backend/AdminDashboard/LeftSide.vue'
    import useCategory from '@/Pages/Backend/AdminDashboard/useCategory.js'

    const { components, activeComponent } = useCategory()
</script>


<style scoped>
</style>