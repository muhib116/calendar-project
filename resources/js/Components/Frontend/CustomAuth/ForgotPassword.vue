<template>
    <div class="py-6">
        <CInput type="email" placeholder="Email" v-model="loginPayload.email" class="mb-6" />
        <div class="">
            <button class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block">
                Recover
            </button>
            <div>
                Don't have account ?
                <button @click="$emit('register')" class="text-[var(--link-color)]">Signup</button>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue'
    import CInput from '@/Components/Global/CInput.vue'
    const loginPayload = ref({
        email: null,
        password: null
    })
</script>

<style scoped>
</style>