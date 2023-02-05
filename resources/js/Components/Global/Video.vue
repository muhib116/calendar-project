<template>
    <div class="relative hover:shadow-xl transition-all text-white">
        <IconPlay class="absolute left-1/2 top-1/2 w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer drop-shadow-lg" />
        <LockIcon v-if="lock" class="absolute right-4 top-4 w-6 h-6 cursor-pointer drop-shadow-lg" />
        <DownloadIcon v-if="download" class="absolute right-4 top-4 w-6 h-6 cursor-pointer drop-shadow-lg" />
        <img class="customRatio" :src="poster" alt="">
        <button v-if="delete" class="absolute left-1/2 bottom-4 transform -translate-x-1/2 cursor-pointer p-2 rounded-full transition-all bg-red-400 hover:shadow-lg hover:bg-red-500 hover:bottom-5">
            <CloseIcon class="w-4 h-4" />
        </button>
    </div>
</template>

<script setup>
import IconPlay from '@/Components/Global/Icons/IconPlay.vue'
import LockIcon from '@/Components/Global/Icons/LockIcon.vue'
import CloseIcon from '@/Icons/CloseIcon.vue'
import DownloadIcon from '@/Icons/DownloadIcon.vue'
defineProps({
    poster: String,
    lock: {
        type: Boolean,
        default: false
    },
    download: {
        type: Boolean,
        default: false
    },
    delete: {
        type: Boolean,
        default: false
    }
})
</script>