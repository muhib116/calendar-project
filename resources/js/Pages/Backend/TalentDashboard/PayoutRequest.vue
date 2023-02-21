<template>
    <div class="p-10 bg-white shadow-lg min-w-[450px] relative">
        <button @click="$emit('close')" class="absolute right-4 top-4">
            <CloseIcon />
        </button>
        <h1 class="text-xl font-semibold text-center">{{ Helper.translate('Request Payout') }}</h1>
        <div class="flex gap-4 mt-5 justify-center">
            <button 
                @click="activeComponent = 'Stripe'" 
                class="px-4 py-2 border rounded font-semibold uppercase hover:shadow hover:bg-sky-500 hover:text-white"
                :class="activeComponent == 'Stripe' && 'shadow bg-sky-500 text-white'"
            >
                Stripe
            </button>
            <button 
                @click="activeComponent = 'Bank'" 
                class="px-4 py-2 border rounded font-semibold uppercase hover:shadow hover:bg-sky-500 hover:text-white"
                :class="activeComponent == 'Bank' && 'shadow bg-sky-500 text-white'"
            >
                Bank
            </button>
        </div>
        <component :is="components[activeComponent]" @close="$emit('close')" />
    </div>
</template>

<script setup>
import { ref } from 'vue'
import Stripe from './PayoutComponent/Stripe.vue'
import Bank from './PayoutComponent/Bank.vue'
import CloseIcon from '@/Icons/CloseIcon.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import Helper from '@/Helper';

const components = {
    Stripe,
    Bank,
}

const activeComponent = ref('Stripe')

</script>

<style lang="scss" scoped>

</style>