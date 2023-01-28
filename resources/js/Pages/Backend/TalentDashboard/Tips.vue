<template>
  <DashboardLayout>
    <template v-slot:leftSidebar>
        <LeftSide />
    </template>
    <template v-slot:content>
      <h1 class="font-semibold text-xl mb-4">Tips</h1>
      <h2 class="text-lg">
          Please activate the 
          <strong class="text-blue-500">Tips</strong>
          option to receive tips from your fans or followers
      </h2>
      <div class="font-bold mt-10 flex">
        <Switch />
      </div>
    </template>
  </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue';
import Switch from '@/Components/Global/Switch.vue';
</script>


<style scoped>
  .content{
    grid-template-columns: 250px 1fr;
  }      
</style>