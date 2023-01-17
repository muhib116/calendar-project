<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid grid-cols-3 gap-6">
                    <div class="video">
                        <Video poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
                    </div>
                    <div class="grid grid-rows-3 items-baseline">
                        <div>
                            <h1 class="text-xl font-bold">Muhibbullah Ansary</h1>
                            <h2 class="text-gray-500">Creator/Artist</h2>
                        </div>
                        <div class="grid gap-4">
                            <Link :href="route('payment.info')" class="px-4 py-2 rounded text-xl bg-red-600 text-white font-bold text-center">Personalized Video: $50</Link>
                            <Link :href="route('payment.info')" class="px-4 py-2 rounded text-xl bg-black text-white font-bold text-center">My Life</Link>
                            <Link :href="route('payment.info')" class="px-4 py-2 rounded text-xl bg-sky-500 text-white font-bold text-center">Tip</Link>
                        </div>
                        <button class="self-end sticky bottom-4 bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] px-8 py-2 text-xl rounded font-semibold shadow mx-auto block">
                            Follow
                        </button>
                    </div>
                    <div class="calendar flex flex-col">
                        <div class="bg-red-100 h-full relative">
                            <span class="price absolute top-4 right-4 shadow bg-sky-500 font-bold px-4 py-1 rounded text-white">$10.00</span>
                            <img class="block h-full w-full object-cover object-center" src="https://images.unsplash.com/photo-1673762482215-33acd768cb46?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2250&q=80" />
                            <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md font-semibold truncate">Calendar Name</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
    import Master from './Master.vue';
    import Video from '@/Components/Global/Video.vue'
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<style lang="scss" scoped>

</style>