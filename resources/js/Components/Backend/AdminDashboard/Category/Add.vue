<template>
    <form @submit.prevent="submit" class="block">
        <button @click="activeComponent='All'" class="flex gap-4 items-center mb-4 font-semibold w-full pb-4">
            <AngleLeftIcon class="w-5 h-5" />
            Back
        </button>
        <div class="max-w-[500px]">
            <h1 class="text-lg font-semibold mb-4">Add Category</h1>
            <div class="relative mb-6">
                <CInput type="text" v-model="form.name" placeholder="Category Name" />
                <span class="absolute top-full left-0 text-xs text-red-500">{{ form.errors.name }}</span>
            </div>
            <div class="relative">
                <CSelect :options="options" v-model="form.status"/>
                <span class="absolute top-full left-0 text-xs text-red-500">{{ form.errors.status }}</span>
            </div>
            <button
                class="bg-green-500 text-white ml-auto block font-semibold px-4 py-2 rounded mt-2"
                :class="!!form.processing && 'pointer-events-none opacity-70'"
            >
                Save
            </button>
        </div>
    </form>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import useCategory from '@/Pages/Backend/AdminDashboard/useCategory.js'
import { useForm } from '@inertiajs/inertia-vue3'

const { activeComponent } = useCategory()

const options = [
    {
        key: '',
        value: 'Select Status'
    },
    {
        key: 1,
        value: 'Enable'
    },
    {
        key: 0,
        value: 'Disable'
    },
]

const form = useForm({
    name: '',
    status: ''
})

const submit = () => {
    form.post(route('admin.category'), {
        onFinish: () => {
            form.reset('name', 'status')
        }
    })
}
</script>

<style lang="scss" scoped>

</style>