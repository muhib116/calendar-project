<template>
    <div class="bg-white w-[600px]">
        <div class="font-semibold flex gap-10 items-center pb-3 mb-3 border-b">
            <button class="opacity-100">Login</button>
            <button class="opacity-50">Sign Up</button>
        </div>
        <component :is="SignIn" />
        <button @click="$emit('close')">Close</button>
    </div>
</template>

<script setup>
    import SignIn from '@/Components/Frontend/CustomAuth/SignIn.vue'
    import SignUp from '@/Components/Frontend/CustomAuth/SignUp.vue'
</script>

<style lang="scss" scoped>

</style>