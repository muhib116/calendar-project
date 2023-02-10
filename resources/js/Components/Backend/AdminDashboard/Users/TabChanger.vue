<template>
    <div class="flex gap-2">
        <button 
            @click="activeComponent = 'Active'" 
            class="px-4 py-1 rounded border"
            :class="activeComponent == 'Active' && 'bg-sky-500 text-white font-medium'"
        >
            Active ({{ activeItems }})
        </button>
        <button 
            @click="activeComponent = 'Deleted'" 
            class="px-4 py-1 rounded border"
            :class="activeComponent == 'Deleted' && 'bg-sky-500 text-white font-medium'"
        >
            Deleted ({{ deleteItems }})
        </button>
    </div>
</template>

<script setup>
import useUser from '@/Pages/Backend/AdminDashboard/useUser.js'

const { activeComponent } = useUser()
defineProps({
    activeItems: {
        type: [String, Number],
        default: 0
    },
    deleteItems: {
        type: [String, Number],
        default: 0
    },
})
</script>

<style lang="scss" scoped>

</style>