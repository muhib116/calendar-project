<template>
    <Master>
        <div class="bg-gray-100 border-b px-4">
            <div class="container mx-auto py-2">
                <h1 class="font-semibold text-xl">Category Name</h1>
            </div>
        </div>

        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
                    <div class="relative hover:shadow-xl transition-all">
                        <img class="customRatio" src="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
                        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">User Name</h2>
                    </div>
                    <div class="relative hover:shadow-xl transition-all">
                        <img class="customRatio" src="https://images.unsplash.com/photo-1673605124954-132c332de83f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
                        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">User Name</h2>
                    </div>
                    <div class="relative hover:shadow-xl transition-all">
                        <img class="customRatio" src="https://images.unsplash.com/photo-1673868077539-9c3120f78420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
                        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">User Name</h2>
                    </div>
                    <div class="relative hover:shadow-xl transition-all">
                        <img class="customRatio" src="https://images.unsplash.com/photo-1673845861099-2785734e247c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">User Name</h2>
                    </div>
                    <div class="relative hover:shadow-xl transition-all">
                        <img class="customRatio" src="https://images.unsplash.com/photo-1673831792265-68b44126c999?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNXx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">User Name</h2>
                    </div>
                    <div class="relative hover:shadow-xl transition-all">
                        <img class="customRatio" src="https://images.unsplash.com/photo-1673843461190-635869dd16b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzNXx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">User Name</h2>
                    </div>
                    <div class="relative hover:shadow-xl transition-all">
                        <img class="customRatio" src="https://images.unsplash.com/photo-1673833453112-8bf23d68ccd0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">User Name</h2>
                    </div>
                    <div class="relative hover:shadow-xl transition-all">
                        <img class="customRatio" src="https://images.unsplash.com/photo-1673861895743-43e136439ee4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyOXx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" alt="">
                        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold truncate">User Name</h2>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
    import Master from '@/Pages/Backend/Master.vue'
</script>

<style scoped>
    .customRatio{
        aspect-ratio: 9/16;
        object-fit: cover;
        object-position: center;
    }
</style>