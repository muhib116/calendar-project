<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-4">
                        <h1 class="font-semibold text-xl mb-4">Tips</h1>
                        <h2 class="text-lg">
                            Please activate the 
                            <strong class="text-blue-500">Tips</strong>
                            option to receive tips from your fans or followers
                        </h2>
                        <div class="font-bold mt-10 flex">
                          <Switch />
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
  import Master from '../Master.vue'
  import LeftSide from '@/Components/Backend/Account2/LeftSide.vue';
import Switch from '@/Components/Global/Switch.vue';
</script>


<style scoped>
  .content{
    grid-template-columns: 250px 1fr;
  }      
</style>