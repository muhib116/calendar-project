<template>
<div>
    <div class="relative">
        <CInput type="text" v-model="form.name" placeholder="Full Name" class="mb-6" />
        <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]" v-if="form.errors.name">
            {{ Helper.translate(form.errors.name, true) }}
        </span>
    </div>
    <div class="relative">
        <CInput type="text" v-model="form.subject" placeholder="Subject" class="mb-6" />
        <span v-if="form.errors.subject" class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
            {{ Helper.translate(form.errors.subject, true) }}
        </span>
    </div>
    <div class="relative">
        <CInput type="email" v-model="form.email" placeholder="Email" class="mb-6" />
        <span v-if="form.errors.email" class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
            {{ Helper.translate(form.errors.email, true) }}
        </span>
    </div>
    <div class="relative">
        <CTextarea v-model="form.message" placeholder="Message" class="mb-6" />
        <span v-if="form.errors.message" class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
            {{ Helper.translate(form.errors.message, true) }}
        </span>
    </div>

    <div class="mt-8">
        <button @click="handleSave" class="uppercase text-sm font-bold tracking-wide bg-green-500 text-gray-100 p-3 rounded w-full hover:shadow">
            {{ Helper.translate('Send Message') }}
        </button>
    </div>
</div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import CTextarea from '@/Components/Global/CTextarea.vue'
import { useForm } from '@inertiajs/inertia-vue3'
import Helper from '@/Helper';
const form = useForm({
    name: null,
    subject: null,
    email: null,
    message: null,
})

const handleSave = () => {
    form.post(route('contact.store'), {
        onSuccess() {
            form.reset()
        }
    })
}

</script>

<style lang="scss" scoped>

</style>