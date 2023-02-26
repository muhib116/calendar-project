<template>
    <Head title="FAQ" />
    <Master>
        <div class="px-4">
            <div class="text-center mb-16">
                <p class="mt-4 text-sm leading-7 font-bold text-gray-400">
                    F.A.Q
                </p>
                <h3 class="text-4xl leading-normal font-black text-gray-900">
                    Frequently Asked <span class="text-red-500">Questions</span>
                </h3>
            </div>
        </div>
        <div class="mx-auto max-w-[600px]">
            <div v-for="index in 10" :key="index" class="flex items-center my-8">
                <div class="flex items-center justify-center p-3 mr-3 rounded-full bg-sky-500 text-white border-4 border-white text-xl font-semibold">
                    <svg width="24" fill="#fff" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g data-name="Layer 2"><g data-name="menu-arrow"><path d="M17 9A5 5 0 0 0 7 9a1 1 0 0 0 2 0 3 3 0 1 1 3 3 1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-1.1A5 5 0 0 0 17 9z"/><circle cx="12" cy="19" r="1"/></g></g></svg>
                </div>
                <div class="text-md">
                    <h1 class="text-gray-900 font-black mb-2">
                        What might be your first question?
                    </h1>
                    <p class="text-gray-500 text-sm">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Maiores impedit perferendis suscipit eaque, iste
                        dolor cupiditate blanditiis ratione.
                    </p>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from "../Backend/Master.vue";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<style scoped></style>
