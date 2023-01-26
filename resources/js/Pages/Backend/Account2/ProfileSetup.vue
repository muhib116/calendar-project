<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-4">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="video">
                                <div class="relative hover:shadow-xl transition-all text-white" data-v-a1897544="">
                                    <span class="price absolute top-4 z-10 right-4 shadow bg-sky-500 font-bold p-2 rounded text-white">
                                        <VideoIcon />
                                    </span>
                                    <Video poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
                                </div>
                            </div>
                            <div class="grid items-center">
                                <div class="grid gap-4">
                                    <a class="px-4 py-2 rounded text-xl bg-black text-white font-bold text-center">
                                        View Profile
                                    </a>
                                    <h1 class="">Change Category</h1>
                                    <select class="">
                                        <option value="">Actress</option>
                                    </select>
                                    <a class="px-4 py-2 rounded text-xl bg-green-500 text-white font-bold text-center">
                                        Save
                                    </a>
                                </div>
                            </div>
                            <div class="calendar flex flex-col">
                                <div class="bg-red-100 h-full relative">
                                    <span class="price absolute top-4 right-4 shadow bg-sky-500 font-bold p-2 rounded text-white">
                                        <CameraIcon />
                                    </span>
                                    <img
                                        class="block h-full w-full object-cover object-center"
                                        src="https://images.unsplash.com/photo-1673762482215-33acd768cb46?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80">
                                    <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md font-semibold truncate">
                                        Calendar Name
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
import LeftSide from '@/Components/Backend/Account2/LeftSide.vue'
import CameraIcon from '@/Icons/CameraIcon.vue'
import VideoIcon from '@/Icons/VideoIcon.vue'
import Video from '@/Components/Global/Video.vue'
</script>


<style scoped>
.content {
    grid-template-columns: 250px 1fr;
}
</style>