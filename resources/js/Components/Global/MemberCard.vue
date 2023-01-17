<template>
    <div class="border border-black border-opacity-20 rounded px-6 py-3 shadow-lg flex gap-4 items-center min-w-[350px] max-w-fit">
        <img 
            class="w-14 h-14 object-cover object-center rounded-full shadow-lg" 
            :src="image" 
            alt=""
        >
        <div class="">
            <h1 class="font-bold text-xl">{{ name }}</h1>
            <h2 class="text-gray-500 italic">{{ designation }}</h2>
        </div>
    </div>
</template>

<script setup>
    defineProps({
        name: String,
        designation: String,
        image: String
    })
</script>