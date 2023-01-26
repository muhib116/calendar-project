<template>
    <div class="grid gap-2">
        <div class="flex justify-between font-semibold px-4 py-2 bg-red-500 text-white border-b">
            <h1>Inbox</h1>
            <button>Send</button>
        </div>
        <div class="grid gap-3">
            <div v-for="index in 4" :key="index" class="flex gap-2 px-4 py-2 border-b border-t cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center text-sm font-bold text-white relative overflow-hidden" style="min-width: 40px;">
                    QW
                    <img 
                        src="https://images.unsplash.com/photo-1674649206998-dfa81167bc36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" 
                        alt="" 
                        class="w-full h-full object-cover object-center absolute top-0 left-0"
                    >
                </div>
                <div class="relative w-full">
                    <button class="bg-red-500 absolute text-sm px-2 text-white top-0 right-0">New</button>
                    <h2 class="font-bold">QWESI</h2>
                    <h3 class="text-sm">Hi Tuyau, Thank...</h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<style lang="scss" scoped>

</style>