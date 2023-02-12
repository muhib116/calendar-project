<template>
    <div class="px-4 py-4 text-gray-400 text-center w-full">
        {{ title }}
    </div>
</template>

<script setup>
    defineProps({
        title: {
            type: String,
            default: 'No data found!'
        }
    })
</script>