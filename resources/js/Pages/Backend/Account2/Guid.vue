<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-4">
                        This is guid page
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
    import Master from '../Master.vue'
    import LeftSide from '@/Components/Backend/Account2/LeftSide.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>