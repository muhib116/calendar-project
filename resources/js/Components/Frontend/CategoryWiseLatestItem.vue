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
                    <Video :poster="talent.video_path" />
                    <h1 class="font-bold px-2 py-2 truncate" :title="talent.name">
                        {{ talent.name }}
                    </h1>
                </Link>
            </template>
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