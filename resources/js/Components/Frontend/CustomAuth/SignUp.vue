<template>
    <form class="py-6 block" @submit.prevent="submit">
        <div class="relative">
            <CInput type="text" placeholder="Name" v-model="form.name" class="mb-6" />
            <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ Helper.translate(form.errors.username, true) }}</span>
        </div>
        <div class="relative">
            <CInput type="email" placeholder="Email" v-model="form.email" class="mb-6" />
            <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ Helper.translate(form.errors.email, true) }}</span>
        </div>
        <div class="relative">
            <CInput type="password" placeholder="Password" v-model="form.password" class="mb-6" />
            <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ Helper.translate(form.errors.password, true) }}</span>
        </div>
        <div class="relative">
            <CInput type="password" placeholder="Confirm Password" v-model="form.password_confirmation" class="mb-6" />
            <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ Helper.translate(form.errors.password_confirmation, true) }}</span>
        </div>

        <label class="flex items-center gap-2 select-none text-sm">
            <input type="checkbox" v-model="form.is_agree" />
            <div>
                {{ Helper.translate('By signup, you agree to our') }}
                <Link target="_blank" :href="route('pages', 'terms-of-service')" class="text-[var(--link-color)]">
                    {{ Helper.translate('Terms of service') }}
                </Link> 
                and 
                <Link target="_blank" :href="route('pages', 'privacy-policy')" class="text-[var(--link-color)]">
                    {{ Helper.translate('Privacy policy') }}
                </Link>.
            </div>
        </label>

        <button 
            v-if="form.is_agree"
            class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block mt-6"
            :class="!!form.processing && 'pointer-events-none opacity-70'"
        >
            {{ Helper.translate('Register') }}
        </button>

        <div v-else class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block w-fit pointer-events-none opacity-60 mt-6">
            {{ Helper.translate('Register') }}
        </div>
    </form>
</template>

<script setup>
import { isEmpty } from 'lodash'
import CInput from '@/Components/Global/CInput.vue'
import { useForm } from '@inertiajs/inertia-vue3'
import Helper from '@/Helper'
import { Link } from '@inertiajs/inertia-vue3'

const emit = defineEmits('close')
const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    is_agree: true,
    role: 'user'
})

const submit = () => {
    form.post(route('register'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation')
            if(isEmpty(form.errors)){
                emit('close')
            }
        }
    })
}
</script>

<style lang="scss" scoped>

</style>