<template>
    <div class="bg-white">
        <div class="banner overflow-hidden relative">
            <img class="h-full w-full object-cover object-center block" :src="`${$page.props.asset}${get(user, 'cover_image')}`" />
            <button v-if="closeable" @click="$emit('close')" class="w-8 h-8 text-white flex items-center justify-center rounded-full bg-red-500 absolute top-4 right-4">
                <CloseIcon class="w-4 h-4" />
            </button>
        </div>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="flex justify-between items-center">
                    <button class="">
                        <svg width="30" height="30" viewBox="-6 0 30 30" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#FF6E6E" d="M15 0 0 15l15 15 3-3L6 15 18 3z"/><path d="m12.5 8.5-3-3L15 0l3 3-5.5 5.5Zm0 13L18 27l-3 3-5.5-5.5 3-3Z" fill="#0C0058"/></g></svg>
                    </button>
                    <h1 class="text-xl font-semibold">{{ Helper.translate(posts.length, true) }} Videos</h1>
                </div>
                <div class=""> 
                    <h2 class="text-center font-black text-2xl">{{ get(user, 'name') }}</h2>
                    <button class="border-2 border-black text-xl rounded px-4 py-2 mx-auto block mt-4 font-black">
                        Subscribe $30/Year (dynamic kora baki)
                    </button>
                </div>

                <div class="px-4">
                    <div class="container mx-auto py-5">
                        <div class="grid grid-cols-4 gap-4">
                            <template v-for="(item, index) in posts" :key="index">
                                <Video
                                    v-if="index <= 3"
                                    :lock="true"
                                    :poster="item.path" 
                                />
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Video from '@/Components/Global/Video.vue'
import CloseIcon from '@/Icons/CloseIcon.vue'
import { get } from 'lodash'
import Helper from '@/Helper';

defineProps({
    closeable: {
        type: Boolean,
        default: false
    },
    user: {
        type: Object,
        default: {},
    },
    posts: {
        type: Array,
        default: [],
    },
})
</script>

<style scoped>
    .banner{
        height: 400px;
    }
</style>