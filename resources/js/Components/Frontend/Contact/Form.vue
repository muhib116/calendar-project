<template>
<div>
    <div class="relative">
        <CInput type="text" placeholder="Full Name" class="mb-6" />
        <!-- <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">Error</span> -->
    </div>
    <div class="relative">
        <CInput type="text" placeholder="Subject" class="mb-6" />
        <!-- <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">Error</span> -->
    </div>
    <div class="relative">
        <CInput type="email" placeholder="Email" class="mb-6" />
        <!-- <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">Error</span> -->
    </div>
    <div class="relative">
        <CTextarea placeholder="Message" class="mb-6" />
        <!-- <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">Error</span> -->
    </div>

    <div class="mt-8">
        <button class="uppercase text-sm font-bold tracking-wide bg-green-500 text-gray-100 p-3 rounded w-full hover:shadow">
            Send Message
        </button>
    </div>
</div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import CTextarea from '@/Components/Global/CTextarea.vue'
</script>

<style lang="scss" scoped>

</style>