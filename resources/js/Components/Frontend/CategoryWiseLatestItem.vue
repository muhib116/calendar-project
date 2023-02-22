<template>
    <div>
        <div class="flex justify-between items-center mb-3">
            <h3 class="font-bold text-xl">{{ title }}</h3>
            <Link :href="route('category.items', category.slug)" class="text-white text-opacity-60 cursor-pointer hover:text-opacity-100">
                More
            </Link>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <template v-for="talent in talents" :key="talent.id">
                <Link :href="route('item.details', talent.id)">
                    <Video poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
                </Link>
            </template>
            <!-- <Link :href="route('category.items', 'actress')">
                <Video poster="https://images.unsplash.com/photo-1673605124954-132c332de83f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
            </Link>
            <Link :href="route('category.items', 'actress')">
                <Video poster="https://images.unsplash.com/photo-1673868077539-9c3120f78420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
            </Link>
            <Link :href="route('category.items', 'actress')">
                <Video poster="https://images.unsplash.com/photo-1673845861099-2785734e247c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" />
            </Link> -->
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    import Video from '@/Components/Global/Video.vue'

    defineProps({
        title: String,
        talents: Array,
        category: Object
    })
</script>

<style scoped>
</style>