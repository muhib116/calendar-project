<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-4">
                        <div class="container mx-auto py-5">
                            <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
                                <Link :href="route('item.details', 'slug')" class="relative hover:shadow-xl transition-all">
                                    <img class="customRatio" src="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
                                    <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                        <h2 class="truncate">User Name</h2>
                                        <h2 class="text-sm truncate">Actors</h2>
                                        <button class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">UnFollow</button>
                                    </div>

                                </Link>
                                <Link :href="route('item.details', 'slug')" class="relative hover:shadow-xl transition-all">
                                    <img class="customRatio" src="https://images.unsplash.com/photo-1673605124954-132c332de83f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
                                    <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                        <h2 class="truncate">User Name</h2>
                                        <h2 class="text-sm truncate">Actors</h2>
                                        <button class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">UnFollow</button>
                                    </div>

                                </Link>
                                <Link :href="route('item.details', 'slug')" class="relative hover:shadow-xl transition-all">
                                    <img class="customRatio" src="https://images.unsplash.com/photo-1673868077539-9c3120f78420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
                                    <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                        <h2 class="truncate">User Name</h2>
                                        <h2 class="text-sm truncate">Actors</h2>
                                        <button class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">UnFollow</button>
                                    </div>

                                </Link>
                                <Link :href="route('item.details', 'slug')" class="relative hover:shadow-xl transition-all">
                                    <img class="customRatio" src="https://images.unsplash.com/photo-1673845861099-2785734e247c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                                    <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                        <h2 class="truncate">User Name</h2>
                                        <h2 class="text-sm truncate">Actors</h2>
                                        <button class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">UnFollow</button>
                                    </div>

                                </Link>
                                <Link :href="route('item.details', 'slug')" class="relative hover:shadow-xl transition-all">
                                    <img class="customRatio" src="https://images.unsplash.com/photo-1673831792265-68b44126c999?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNXx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                                    <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                        <h2 class="truncate">User Name</h2>
                                        <h2 class="text-sm truncate">Actors</h2>
                                        <button class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">UnFollow</button>
                                    </div>

                                </Link>
                                <Link :href="route('item.details', 'slug')" class="relative hover:shadow-xl transition-all">
                                    <img class="customRatio" src="https://images.unsplash.com/photo-1673843461190-635869dd16b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzNXx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                                    <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                        <h2 class="truncate">User Name</h2>
                                        <h2 class="text-sm truncate">Actors</h2>
                                        <button class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">UnFollow</button>
                                    </div>

                                </Link>
                                <Link :href="route('item.details', 'slug')" class="relative hover:shadow-xl transition-all">
                                    <img class="customRatio" src="https://images.unsplash.com/photo-1673833453112-8bf23d68ccd0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                                    <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                        <h2 class="truncate">User Name</h2>
                                        <h2 class="text-sm truncate">Actors</h2>
                                        <button class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">UnFollow</button>
                                    </div>

                                </Link>
                                <Link :href="route('item.details', 'slug')" class="relative hover:shadow-xl transition-all">
                                    <img class="customRatio" src="https://images.unsplash.com/photo-1673861895743-43e136439ee4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyOXx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                                    <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                        <h2 class="truncate">User Name</h2>
                                        <h2 class="text-sm truncate">Actors</h2>
                                        <button class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">UnFollow</button>
                                    </div>

                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import Master from '../Master.vue'
    import LeftSide from '@/Components/Backend/Account/LeftSide.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
    .customRatio{
        aspect-ratio: 9/16;
        object-fit: cover;
        object-position: center;
    }
</style>