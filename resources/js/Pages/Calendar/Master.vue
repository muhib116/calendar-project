<template>
    <div class="wrapper">
        <Navigation />
        <div class='grid _leftSidebarAndMainContent items-start m-auto min-h-screen bg-slate-100'>
            <aside class="min-h-20">
                <LeftSidebar />
            </aside>
            <main class="min-h-20">
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script setup>
import Navigation from '@/Components/Backend/TalentDashboard/Calendar/Navigation.vue'
import LeftSidebar from '@/Components/Backend/TalentDashboard/Calendar/LeftSidebar/LeftSidebar.vue'
</script>

<style scoped>
.wrapper{
    grid-template-rows: 65px 1fr;
}
._leftSidebarAndMainContent{
    grid-template-columns: 350px 1fr;
}
</style>