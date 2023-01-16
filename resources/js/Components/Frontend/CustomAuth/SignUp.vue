<template>
    <div class="py-6">
        <CInput type="text" placeholder="Username" v-model="registrationPayload.username" class="mb-6" />
        <CInput type="email" placeholder="Email" v-model="registrationPayload.email" class="mb-6" />
        <CInput type="password" placeholder="Password" v-model="registrationPayload.password" class="mb-6" />
        <label class="flex items-center gap-2 select-none">
            <input type="checkbox" v-model="registrationPayload.accept" />
            <div>
                By signup, you agree to our 
                <a href="#" class="text-[var(--link-color)]">Terms of service</a> 
                and <a href="#" class="text-[var(--link-color)]">Privacy policy</a>.
            </div>
        </label>
        <button @click="step=2" class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block mt-2">
            Register
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import CInput from '@/Components/Global/CInput.vue'
const registrationPayload = ref({
    username: null,
    email: null,
    password: null,
    accept: true
})

const step = ref(1)
</script>

<style lang="scss" scoped>

</style>