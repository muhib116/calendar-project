<template>
    <div class="relative hover:shadow-xl transition-all text-white">
        <IconPlay class="absolute left-1/2 top-1/2 w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer" />
        <LockIcon v-if="lock" class="absolute right-4 top-4 w-6 h-6 cursor-pointer" />
        <img class="customRatio" :src="poster" alt="">
    </div>
</template>

<script setup>
    import IconPlay from '@/Components/Global/Icons/IconPlay.vue'
    import LockIcon from '@/Components/Global/Icons/LockIcon.vue'
    defineProps({
        poster: String,
        lock: Boolean
    })
</script>