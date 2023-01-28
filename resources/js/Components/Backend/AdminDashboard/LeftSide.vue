<template>
    <div class="grid gap-2">
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-sky-500 rounded"
            :class="route().current('admin.dashboard') ? 'bg-sky-500 text-white' : ''"
            :href="route('admin.dashboard')"
        >
            Dashboard
        </Link>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<style scoped>

</style>