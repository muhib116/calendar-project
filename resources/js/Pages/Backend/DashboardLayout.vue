<template>
    <Master :header="header" :footer="footer">
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <slot name="leftSidebar"></slot>
                    </div>
                    <div class="border border-l-0 p-6 flex flex-col gap-6">
                        <slot name="content"></slot>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from './Master.vue'
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