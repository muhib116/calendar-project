<template>
    <div class="flex gap-4 justify-between">
        <div class="flex gap-2 items-center">
            Show 
            <select class="border-[#0002]">
                <option value="10">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            Entries
        </div>
        <div class="flex gap-4 items-center">
            <button class="font-semibold border rounded px-4 py-1 bg-blue-500 text-white">Tips</button>
            <button class="font-semibold border rounded px-4 py-1">Wishes</button>
            <button class="font-semibold border rounded px-4 py-1">My Life</button>
            <button class="font-semibold border rounded px-4 py-1">Calendar</button>
        </div>
        <div class="">
            <CInput type="search" placeholder="Search" />
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
</script>