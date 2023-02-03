<template>
    <div class="flex gap-2">
        <button 
            @click="activeComponent = 'Active'" 
            class="px-4 py-1 rounded border"
            :class="activeComponent == 'Active' && 'bg-sky-500 text-white font-medium'"
        >
            Active (3500)
        </button>
        <button 
            @click="activeComponent = 'Deleted'" 
            class="px-4 py-1 rounded border"
            :class="activeComponent == 'Deleted' && 'bg-sky-500 text-white font-medium'"
        >
            Deleted (150)
        </button>
    </div>
</template>

<script setup>
import useTalents from '@/Pages/Backend/AdminDashboard/useTalents.js'

const { activeComponent } = useTalents()
</script>