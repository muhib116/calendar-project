<template>
    <div class="bg-red-50 p-4 py-6">
        <h1 class="font-semibold text-xl mb-4 text-center">
            {{ Helper.translate('Delete UserDashboard') }}
        </h1>
        <div class="flex justify-center gap-6">
            <button class="bg-gray-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit mt-4">
                {{ Helper.translate('No') }}
            </button>
            <button @click="handleSave" class="bg-red-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit mt-4">
                {{ Helper.translate('Yes') }}
            </button>
        </div>
    </div>
</template>

<script setup>
import Helper from '@/Helper';
import { useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    deleteUser: true,
});

const handleSave = () => {
    Helper.confirm('Are you sure to delete your account?', () => {
        form.put(route('user.account.update'))
    })
}
</script>

<style scoped>
</style>