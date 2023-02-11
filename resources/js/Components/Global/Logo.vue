<template>
    <Link :href="route('home')" class="logo text-2xl w-fit mx-auto">
        <span :class="light ? 'text-white' : 'text-black'">NE</span>
        <span class="text-sky-500">X</span>
        <span :class="light ? 'text-white' : 'text-black'">T</span>
        <span class="text-red-500">WISHER</span>
    </Link>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'

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