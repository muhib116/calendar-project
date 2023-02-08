<template>
    <form @submit.prevent="submit" class="block">
        <button @click="activeComponent='All'" class="p-1 px-2 pr-4 rounded bg-gray-500 text-white inline-flex items-center w-fit gap-2 mb-4">
            <AngleLeftIcon class="w-5 h-5" />
            Back
        </button>
        <div class="max-w-[500px]">
            <h1 class="text-lg font-semibold mb-4">Edit Category</h1>
            <div class="relative mb-6">
                <CInput type="text" v-model="form.name" placeholder="Category Name" />
                <span class="absolute top-full left-0 text-xs text-red-500">{{ form.errors.name }}</span>
            </div>
            <div class="relative">
                <CSelect :options="categoryStatus" v-model="form.status"/>
                <span class="absolute top-full left-0 text-xs text-red-500">{{ form.errors.status }}</span>
            </div>
            <button
                class="bg-green-500 text-white ml-auto block font-semibold px-4 py-2 rounded mt-2"
                :class="!!form.processing && 'pointer-events-none opacity-70'"
            >
                Update
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
import { isEmpty } from 'lodash'

const { activeComponent, selectedCategory, categoryStatus } = useCategory()

const form = useForm({
    id: selectedCategory.value.id,
    name: selectedCategory.value.name,
    status: selectedCategory.value.status
})

const submit = () => {
    form.post(route('admin.category.edit', form.id), {
        onFinish: () => {
            if(isEmpty(form.errors)){
                selectedCategory.value = {}
                activeComponent.value = 'All'
            }
        }
    })
}
</script>

<style lang="scss" scoped>

</style>