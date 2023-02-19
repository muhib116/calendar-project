<template>
    <Head :title="Helper.translate('Ocassion Management')" />
    <DashboardLayout :header="false" :footer="false" :title="Helper.translate('Ocassion Management')">
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
    import useOcassion from '@/Pages/Backend/AdminDashboard/useOcassion.js'
    import { Head } from '@inertiajs/inertia-vue3';
    import Helper from '@/Helper';

    const { components, activeComponent } = useOcassion()
</script>


<style scoped>
</style>