<template>
    <div>
        <div class="flex justify-between items-center mb-3">
            <h3 class="font-bold text-xl">Actors</h3>
            <Link :href="route('category.items', 'actors')" class="text-white text-opacity-60 cursor-pointer hover:text-opacity-100">More</Link>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <div class="relative hover:shadow-xl transition-all">
                <IconPlay class="absolute left-1/2 top-1/2 w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer" />
                <img class="customRatio" src="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
            </div>
            <div class="relative hover:shadow-xl transition-all">
                <IconPlay class="absolute left-1/2 top-1/2 w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer" />
                <img class="customRatio" src="https://images.unsplash.com/photo-1673605124954-132c332de83f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
            </div>
            <div class="relative hover:shadow-xl transition-all">
                <IconPlay class="absolute left-1/2 top-1/2 w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer" />
                <img class="customRatio" src="https://images.unsplash.com/photo-1673868077539-9c3120f78420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
            </div>
            <div class="relative hover:shadow-xl transition-all">
                <IconPlay class="absolute left-1/2 top-1/2 w-12 h-12 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer" />
                <img class="customRatio" src="https://images.unsplash.com/photo-1673845861099-2785734e247c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import IconPlay from '@/Components/Global/Icons/IconPlay.vue'


</script>

<style scoped>
    .customRatio{
        aspect-ratio: 9/16;
    }
</style>