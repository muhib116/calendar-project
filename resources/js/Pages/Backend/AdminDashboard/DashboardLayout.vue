<template>
    <Master :header="header" :footer="footer">
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh] gap-4">
                    <div class="border p-4">
                        <slot name="leftSidebar"></slot>
                    </div>
                    <div>
                        <div class="header">
                            <h1 class="text-center font-black text-xl uppercase">Demo <span class="text-red">Logo</span></h1>
                            <h2 class="text-lg font-semibold mb-2 uppercase">Dashboard</h2>
                        </div>
                        <div class="border p-6 flex flex-col gap-6">
                            <slot name="content"></slot>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
defineProps({
        header: {
            type: Boolean,
            default: true
        },
        footer: {
            type: Boolean,
            default: true
        }
})
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>