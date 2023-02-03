<template>
    <div class="flex gap-2">
        <button 
            @click="activeComponent = 'Active'" 
            class="px-4 py-1 rounded border"
            :class="activeComponent == 'Active' && 'bg-sky-500 text-white font-medium'"
        >
            Active (200)
        </button>
        <button 
            @click="activeComponent = 'Deleted'" 
            class="px-4 py-1 rounded border"
            :class="activeComponent == 'Deleted' && 'bg-sky-500 text-white font-medium'"
        >
            Deleted (15)
        </button>
    </div>
</template>

<script setup>
import useUser from '@/Pages/Backend/AdminDashboard/useUser.js'

const { activeComponent } = useUser()
</script>

<style lang="scss" scoped>

</style>