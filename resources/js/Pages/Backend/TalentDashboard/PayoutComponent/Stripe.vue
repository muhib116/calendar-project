<template>
    <div>
        <h2 class="text-lg font-semibold mt-6 mb-4 text-red-500 text-center">Minimum Payout $25</h2>
        <CInput type="number" placeholder="Enter Payout Amount" />
        <CInput type="email" placeholder="Stripe Email" />
        <CInput type="email" placeholder="Confirm Stripe Email" />
        <button class="bg-green-500 text-white px-4 py-2 rounded block ml-auto mt-5 font-semibold">
            Submit
        </button>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'

</script>

<style lang="scss" scoped>

</style>