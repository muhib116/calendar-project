<template>
    <div class="flex justify-between items-end pb-4">
        <h2 class="font-semibold -mb-1">Wish List</h2>
        <CInput type="search" placeholder="Search" class="min-w-[300px]"/>
    </div>
    <div class="container mx-auto py-5">
        <div class="grid grid-cols-4 gap-4">
            <Video :download="true" delete="true" poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
            <Video :download="true" delete="true" poster="https://images.unsplash.com/photo-1673605124954-132c332de83f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
            <Video :download="true" delete="true" poster="https://images.unsplash.com/photo-1673868077539-9c3120f78420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
            <Video :download="true" delete="true" poster="https://images.unsplash.com/photo-1673845861099-2785734e247c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60" />
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import Video from '@/Components/Global/Video.vue'
</script>

<style lang="scss" scoped>

</style>