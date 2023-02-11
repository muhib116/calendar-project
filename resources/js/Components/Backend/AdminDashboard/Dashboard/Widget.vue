<template>
    <div class="grid grid-cols-4 gap-6">
        <div class="relative flex gap-4 items-center border border-green-500 p-4 pt-8 rounded-lg shadow-lg justify-center font-bold text-center shadow-green-500/20 ">
            <span class="absolute top-0 left-0 transform -translate-y-1/2 w-full bg-green-500 text-white p-4 py-1 rounded">
                Visitors
            </span>
            3000
            <AngleUpIcon class="text-green-500" />
        </div>
        <div class="relative flex gap-4 items-center border border-amber-400 p-4 pt-8 rounded-lg shadow-lg justify-center font-bold text-center shadow-amber-500/20">
            <span class="absolute top-0 left-0 transform -translate-y-1/2 w-full bg-amber-500 text-white p-4 py-1 rounded">
                Users
            </span>
            1200
            <AngleUpIcon class="text-red-500 transform rotate-180" />
        </div>
        <div class="relative flex gap-4 items-center border border-red-400 p-4 pt-8 rounded-lg shadow-lg justify-center font-bold text-center shadow-red-500/20">
            <span class="absolute top-0 left-0 transform -translate-y-1/2 w-full bg-red-400 text-white p-4 py-1 rounded">
                Talents
            </span>
            400
            <AngleUpIcon class="text-green-500" />
        </div>
        <div class="relative flex gap-4 items-center border border-sky-500 p-4 pt-8 rounded-lg shadow-lg justify-center font-bold text-center shadow-sky-500/20">
            <span class="absolute top-0 left-0 transform -translate-y-1/2 w-full bg-sky-500 text-white p-4 py-1 rounded">
                Page Views
            </span>
            36500
            <AngleUpIcon class="text-red-500 transform rotate-180" />
        </div>
    </div>
</template>

<script setup>
import AngleUpIcon from '@/Icons/AngleUpIcon.vue'
</script>