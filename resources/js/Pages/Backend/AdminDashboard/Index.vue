<template>
    <Head title="Dashboard" />
    <DashboardLayout :header="false" :footer="false" title="Dashboard">
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <Header class="border-b pb-4" />
            <Widget class="mt-5" />
            <div class="graph-wrapper grid gap-6 mt-5">
                <div class="grid gap-6">
                    <div class="border p-4 rounded min-h-[200px]">
                        <Big />
                    </div>
                    <div class="border p-4 rounded font-medium capitalize">
                        <div class="flex justify-between items-center text-green-500">
                            <span class="">New users</span>
                            <span class="">380</span>
                        </div>
                        <div class="flex justify-between items-center text-amber-500">
                            <span class="">Talents Applications</span>
                            <span class="">44</span>
                        </div>
                        <div class="flex justify-between items-center text-sky-500">
                            <span class="">Talents Applications Approved</span>
                            <span class="">44</span>
                        </div>
                    </div>
                </div>
                <div class="border p-4 rounded flex flex-col items-center">
                    <h1 class="font-semibold text-center mb-10 mt-5">Demography</h1>
                    <Small />
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from './DashboardLayout.vue'
import LeftSide from '@/Components/Backend/AdminDashboard/LeftSide.vue'
import Header from '@/Components/Backend/AdminDashboard/Dashboard/Header.vue'
import Widget from '@/Components/Backend/AdminDashboard/Dashboard/Widget.vue'
import Big from '@/Components/Backend/AdminDashboard/Dashboard/Chart/Big.vue'
import Small from '@/Components/Backend/AdminDashboard/Dashboard/Chart/Small.vue'
import { Head } from '@inertiajs/inertia-vue3'
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
    .graph-wrapper{
        grid-template-columns: 2fr 1fr;
    }
</style>