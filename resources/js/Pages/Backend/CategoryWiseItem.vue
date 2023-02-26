<template>
    <Master>
        <div class="bg-gray-100 border-b px-4">
            <div class="container mx-auto py-2">
                <h1 class="font-semibold text-xl">{{ Helper.translate(category.name, true) }}</h1>
            </div>
        </div>

        <div class="px-4">
            <div class="container mx-auto py-5">
                <div v-if="!isEmpty(talents)" class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 items-end gap-6">
                    <template v-for="(talent, index) in talents" :key="index">
                        <Link :href="route('item.details', talent.id)" class="relative border hover:shadow-xl transition-all">
                            <Video :poster="talent.video_path" />
                            <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">
                                {{ talent.name }}
                            </h2>
                        </Link>
                    </template>
                </div>
                <div v-else class="text-center py-4">
                    {{ Helper.translate('No talent found') }}
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
    import Helper from '@/Helper'
    import Master from '@/Pages/Backend/Master.vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import { isEmpty } from 'lodash'
    import Video from '@/Components/Global/Video.vue'

    const props = defineProps({
        talents: {
            type: Array,
            default: []
        },
        category: {
            type: Object,
            default: {}
        }
    });
</script>

<style scoped>
    .customRatio{
        aspect-ratio: 3/4;
        object-fit: cover;
        object-position: center;
    }
</style>