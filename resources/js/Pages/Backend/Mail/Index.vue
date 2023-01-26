<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-6 flex flex-col gap-2">
                        <div class="flex gap-2">
                            <h1 class="font-bold">Your Name:</h1>
                            TUYAU
                            <div class="bg-blue-500 rounded text-white px-2 inline-block">
                                He/Him
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <h1 class="font-bold">Occasion:</h1>
                            Birthday
                        </div>
                        <div class="grid gap-2 mt-6">
                            <h1 class="font-bold">Instructions:</h1>
                            <p class="mb-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <p class="mb-1">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>

                        <CTextarea placeholder="Write your message" rows="5" class="mt-10" />
                        <div class="flex justify-between mt-4 items-center">
                            <label class="cursor-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="2" d="m22 12-9 9c-6 6-15-3-9-9l9-9c4-4 10 2 6 6l-9 9c-2 2-5-1-3-3l9-9"/></svg>
                                <input type="file" class="hidden">
                            </label>
                            <button class="text-white bg-red-500 font-bold px-6 py-2 rounded">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
import LeftSide from '@/Components/Backend/Mail/LeftSide.vue'
import CTextarea from '@/Components/Global/CTextarea.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>