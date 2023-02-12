<template>
    <div>
        <div class="flex gap-4 justify-between items-center">
            <div class="flex gap-2 items-center font-bold text-lg">
                Category List
            </div>
            <button @click="activeComponent = 'Add'" class="px-4 py-1 rounded bg-sky-500 text-white font-bold">
                Add Category
            </button>
        </div>

        <div class="flex flex-col mt-4">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b whitespace-nowrap">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Category
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Status
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(category, index) in categories" :key="category.id" class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ index+1 }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{ category.name }}
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                <span class="font-semibold" :class="category.status ? 'text-green-500' : 'text-red-500'">
                                    {{ category.status ? 'Enabled' : 'Disabled' }}
                                </span>
                            </td>
                            <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex justify-end gap-2">
                                <button @click="handleEdit(category)" class="bg-gray-800 px-2 py-1 rounded text-white text-sm font-bold block">
                                    <EditIcon class="w-4 h-4" />
                                </button>
                                <button @click="deleteCategory(category.id)" class="bg-red-500 px-2 py-1 rounded text-white text-sm font-bold block">
                                    <CloseIcon class="w-4 h-4" />
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue'
import EditIcon from '@/Icons/EditIcon.vue'
import useCategory from '@/Pages/Backend/AdminDashboard/useCategory.js'
import CloseIcon from '@/Icons/CloseIcon.vue'
import { usePage } from '@inertiajs/inertia-vue3'
import Helper from '@/Helper.js'
import { Inertia } from '@inertiajs/inertia'


const { activeComponent, selectedCategory } = useCategory()
const categories = computed(() => {
    return usePage().props.value.categories
})

const handleEdit = (category) => {
    activeComponent.value = 'Edit'
    selectedCategory.value = category
}

const deleteCategory = (id) => {
    Helper.confirm("Are you sure to delete?", ()=>{
        Inertia.delete(route('admin.category.delete', id))
    })
}
</script>