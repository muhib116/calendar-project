<template>
    <div class="relative group">
        <span class="font-black w-10 h-10 bg-orange-500 grid content-center justify-center rounded-full p-2 text-xs cursor-pointer">MA</span>
        <div class="opacity-0 invisible group-hover:visible group-hover:opacity-100 dropdown grid absolute right-0 top-[50px] bg-white text-[var(--text-color)] rounded shadow-lg z-10">
            <span class="w-2 h-2 bg-white absolute right-4 rotate-45 bottom-full transform translate-y-1/2"></span>
            <a class="px-4 py-2 border-b border-b-[--text-color] border-opacity-20 hover:bg-gray-100 transition-all" href="#">Profile</a>
            <a class="px-4 py-2 border-b border-b-[--text-color] border-opacity-20 hover:bg-gray-100 transition-all" href="#">Account</a>
            <Link 
                class="px-4 py-2 hover:bg-gray-100 transition-all"
                :href="route('logout')" 
                method="post"
            >
                Logout
            </Link>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
</script>

<style lang="scss" scoped>

</style>