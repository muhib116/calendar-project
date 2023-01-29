<template>
    <div class="logo text-2xl">
        <span :class="light ? 'text-white' : 'text-black'">NE</span>
        <span class="text-sky-500">X</span>
        <span :class="light ? 'text-white' : 'text-black'">T</span>
        <span class="text-red-500">WISHER</span>
    </div>
</template>

<script setup>
    defineProps({
        light: {
            type: Boolean,
            default: false
        }
    })
</script>

<style scoped>
.logo{
    font-family: 'Righteous', cursive;
}
</style>