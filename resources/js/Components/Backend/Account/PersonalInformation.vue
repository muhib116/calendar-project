<template>
    <div>
        <h1 class="font-semibold text-xl mb-4">Personal Information</h1>
        <div class="grid usernameAndEmailWrapper items-center gap-5 flex-wrap">
            <CInput type="text" placeholder="Username"/>
            <CInput type="email" placeholder="Email"/>
            <button class="bg-red-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap">Update / Save</button>
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
</script>

<style scoped>
.usernameAndEmailWrapper{
    grid-template-columns: 1fr 1fr 150px;
}
</style>