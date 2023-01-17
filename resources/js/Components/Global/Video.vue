<template>
    <div class="relative hover:shadow-xl transition-all text-white">
        <IconPlay class="absolute left-1/2 top-1/2 w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer" />
        <img class="customRatio" :src="poster" alt="">
    </div>
</template>

<script setup>
    import IconPlay from '@/Components/Global/Icons/IconPlay.vue'
    defineProps({
        poster: String
    })
</script>

<style scoped>
    .customRatio{
        aspect-ratio: 9/16;
    }
</style>