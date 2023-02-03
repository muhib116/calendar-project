<template>
    <h2 class="font-semibold mb-2">Change Password</h2>
    <div class="mt-5">
        <CInput placeholder="New Password" />
        <CInput placeholder="Confirm Password" />
        <button class="px-4 py-1 rounded bg-green-500 text-white font-semibold mt-5 ml-auto block">Make Change</button>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue';


</script>

<style lang="scss" scoped>

</style>