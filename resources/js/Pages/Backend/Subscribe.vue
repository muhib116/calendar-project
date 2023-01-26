<template>
    <Master>
        <div class="banner overflow-hidden">
            <img class="h-full w-full object-cover object-center block" src="https://plus.unsplash.com/premium_photo-1666539896234-3890a46f6f02?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2072&q=80" />
        </div>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="flex justify-between items-center">
                    <button class="">
                        <svg width="30" height="30" viewBox="-6 0 30 30" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#FF6E6E" d="M15 0 0 15l15 15 3-3L6 15 18 3z"/><path d="m12.5 8.5-3-3L15 0l3 3-5.5 5.5Zm0 13L18 27l-3 3-5.5-5.5 3-3Z" fill="#0C0058"/></g></svg>
                    </button>
                    <h1 class="text-xl font-semibold">4 Videos</h1>
                </div>
                <div class="">
                    <h2 class="text-center font-black text-2xl">Muhibbullah</h2>
                    <button class="border-2 border-black text-xl rounded px-4 py-2 mx-auto block mt-4 font-black">
                        Subscribe $30/Year
                    </button>
                </div>

                <div class="px-4">
                    <div class="container mx-auto py-5">
                        <div class="grid grid-cols-4 gap-4">
                            <Video :lock="true" poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
                            <Video :lock="true" poster="https://images.unsplash.com/photo-1673605124954-132c332de83f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
                            <Video :lock="true" poster="https://images.unsplash.com/photo-1673868077539-9c3120f78420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
                            <Video :lock="true" poster="https://images.unsplash.com/photo-1673845861099-2785734e247c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
    import Master from './Master.vue'
    import Video from '@/Components/Global/Video.vue'
</script>


<style scoped>
    .banner{
        height: 400px;
    }
</style>