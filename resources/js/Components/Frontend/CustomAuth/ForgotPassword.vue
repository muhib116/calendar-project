<template>
    <div class="py-6">
        <div class="relative mb-6">
            <CInput type="email" placeholder="Email" v-model="form.email" class="mb-6" />
            <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.email, true) }}</span>
        </div>
        <!-- email -->
        <div class="">
            <button @click="submit" :disabled="form.processing" class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto flex items-center gap-1">
                <LoaderIcon v-if="form.processing" />
                {{ Helper.translate('Recover') }}
            </button>
            <div>
                {{ Helper.translate('Don\'t have account ?') }}
                <button @click="$emit('register')" class="text-[var(--link-color)]">
                    {{ Helper.translate('Signup') }}
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import CInput from '@/Components/Global/CInput.vue'
import Helper from '@/Helper'
import { useForm } from '@inertiajs/inertia-vue3';
import { isEmpty } from 'lodash';
import Swal from 'sweetalert2';
import LoaderIcon from '@/Components/Global/Icons/LoaderIcon.vue';

const form = useForm({
    email: '',
});
const emit = defineEmits(['register']);
const submit = () => {
    form.post(route('password.email'), {
        onSuccess(e) {
            if (isEmpty(e.props.errors)) {
                Swal.fire({
                    icon: 'success',
                    title: Helper.translate('Mail has been sent to') + ' ' + Helper.translate(form.email, true),
                })
                emit('close')
                form.reset();
            }
        }
    });
};
</script>

<style scoped></style>