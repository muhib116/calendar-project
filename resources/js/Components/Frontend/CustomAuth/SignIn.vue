<template>
    <div class="py-6">
        <form @submit.prevent="submit">
            <div class="relative">
                <CInput type="email" placeholder="Email" v-model="form.email" class="mb-6" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.email, true) }}
                </span>
            </div>
            <div class="relative">
                <CInput type="password" placeholder="Password" v-model="form.password" class="mb-6" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.password, true) }}
                </span>
            </div>
            <label class="relative block mb-4">
                <Checkbox name="remember" v-model:checked="form.remember" />
                <span class="ml-2 text-sm text-gray-600">
                    {{ Helper.translate('Remember me') }}
                </span>
            </label>

            <button @click="$emit('forgotPassword')" class="block opacity-70 hover:opacity-100 hover:text-[var(--link-color)]">Forgot password ?</button>
            <button 
                class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block"
                :class="!!form.processing && 'pointer-events-none opacity-70'"
            >
            {{ Helper.translate('Sign In') }}
            </button>
        </form>
        <div>
            {{ Helper.translate('Don\'t have account ?') }}
            <button @click="$emit('register')" class="text-[var(--link-color)]">
                {{ Helper.translate('Signup') }}
            </button>
        </div>
    </div>
</template>


<script setup>
import { isEmpty } from 'lodash'
import CInput from '@/Components/Global/CInput.vue'
import { useForm } from '@inertiajs/inertia-vue3'
import Checkbox from '@/Components/Global/Checkbox.vue'
import Helper from '@/Helper'

defineProps({
    canResetPassword: Boolean,
    status: String,
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
})

const emit = defineEmits('close')
const submit = () => {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password')
            if(isEmpty(form.errors)){
                emit('close')
            }
        }
    })
}
</script>