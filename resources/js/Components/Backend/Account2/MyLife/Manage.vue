<template>
    <div>
        <input type="file" />
        <div class="font-bold mt-5">
            Write title
            <div class="flex items-center gap-6">
                <CInput type="text" placeholder="Title" characterLimit="50" class="w-full" />
                <button class="px-4 py-2 bg-red-500 text-white rounded">Post</button>
            </div>
        </div>
        <hr class="mt-10" />
        <div class="rounded mt-10 grid grid-cols-4 gap-6">
            <div v-for="index in 8" :key="index" class="relative">
                <Video poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
                <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md">
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
                    <button class="bg-red-500 text-white px-6 py-1 ml-auto block rounded mt-4 font-semibold">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue';
import Video from '@/Components/Global/Video.vue'
</script>

<style lang="scss" scoped>

</style>