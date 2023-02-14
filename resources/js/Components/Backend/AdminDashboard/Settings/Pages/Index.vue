<template>
    <Create v-if="isEmpty(selectedPage) && size($page.props.pages) <= 2" />
    {{ selectedPage }}
    <Edit v-if="!isEmpty(selectedPage)" @canceledit="selectedPage=null" :selectedPage="selectedPage" />

    <div class="flex flex-col mt-4">
        <h1 class="text-lg my-2 mb-4 flex items-center gap-6">{{ Helper.translate('Page List') }}</h1>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b whitespace-nowrap">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            #
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            {{ Helper.translate('Title') }}
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            {{ Helper.translate('Slug') }}
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            {{ Helper.translate('Status') }}
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                            {{ Helper.translate('Action') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(page, index) in $page.props.pages" :key="page.id" class="border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ Helper.translate(index+1) }}
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                            {{ Helper.translate(page.title, true) }}
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                            {{ Helper.translate(page.slug) }}
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                            <span class="font-semibold" :class="page.status ? 'text-green-500' : 'text-red-500'">
                                {{ page.status ? Helper.translate('Enabled') : Helper.translate('Disabled') }}
                            </span>
                        </td>
                        
                        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex justify-end gap-2">
                            <button @click="selectedPage = page" class="bg-gray-800 px-2 py-1 rounded text-white text-sm font-bold block">
                                <EditIcon class="w-4 h-4" />
                            </button>
                            <button @click="handleDelete(page.id)" class="bg-red-500 px-2 py-1 rounded text-white text-sm font-bold block">
                                <CloseIcon class="w-4 h-4" />
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/inertia-vue3';
import Helper from '@/Helper';
import EditIcon from '@/Icons/EditIcon.vue';
import CloseIcon from '@/Icons/CloseIcon.vue';
import Create from '@/Components/Backend/AdminDashboard/Settings/Pages/Create.vue'
import Edit from '@/Components/Backend/AdminDashboard/Settings/Pages/Edit.vue'
import { isEmpty, size } from 'lodash'
import { Inertia } from '@inertiajs/inertia';

const form = useForm({
    title: null,
    slug: null, 
    settings: null,
    description: null,
});

const selectedPage = ref(null);

const handleDelete = (id) => {
    Helper.confirm('Are you sure to delete?', () => {
        Inertia.delete(route('admin.deletepage', id))
    })
}

</script>

<style>
.ck-editor__editable_inline {
    min-height: 150px;
}
</style>