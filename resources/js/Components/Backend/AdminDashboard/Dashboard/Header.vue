<template>
    <div class="wrapper items-center uppercase font-bold">
        <h2 class="text-lg">
            Custom
        </h2>
        <div class="flex items-center justify-center gap-4">
            <button class="border">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z"/></svg>
            </button>

            <span class="flex items-center gap-2 text-lg">
                <span class="w-4 h-4 rounded-full bg-green-500 inline-block"></span>
                Online:
            </span>

            <span class="text-md text-amber-400">
                Visitors: 900
            </span>

            <span class="text-md text-red-400">
                Users: 600
            </span>

            <span class="text-md text-sky-500">
                Talents: 150
            </span>
        </div>
        <div class="flex justify-end">
            <select class="border-gray-500 border-opacity-30 rounded uppercase ml-auto">
                <option value="today">Today</option>
                <option value="last 7days">Last 7Days</option>
                <option value="last month">Last Month</option>
            </select>
        </div>
    </div>
</template>

<script setup>

</script>

<style scoped>
    .wrapper{
        display: grid;
        grid-template-columns: 200px 1fr 200px;
    }
</style>