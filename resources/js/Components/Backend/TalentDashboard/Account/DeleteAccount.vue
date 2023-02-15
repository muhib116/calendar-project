<template>
    <h1 class="font-semibold text-xl mb-4 text-center">{{ Helper.translate('Delete Account') }}</h1>
    <div class="flex justify-center gap-6">
        <button class="bg-gray-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit mt-4">
            {{ Helper.translate('No') }}
        </button>
        <button @click="handleDelete" class="bg-red-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit mt-4">
            {{ Helper.translate('Yes') }}
        </button>
    </div>
</template>

<script setup>
import Helper from '@/Helper'
import { isEmpty } from 'lodash'
import { useForm } from '@inertiajs/inertia-vue3'


const form = useForm({
    deleteUser: null
})

const handleDelete = () => {
    Helper.confirm('Are you sure to delete your account?', () => {
        form.deleteUser = true;
        handleSave();
    })
}

const handleSave = () => {
    form.put(route('user.account.update'), {
        onSuccess(e) {
            if (isEmpty(e.props.errors)) {
                form.reset();
            }
        }
    })
}
</script>

<style lang="scss" scoped>

</style>