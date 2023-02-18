<template>
    <form @submit.prevent="submit" class="block">
        <button @click="activeComponent='All'" class="p-1 px-2 pr-4 rounded bg-gray-500 text-white inline-flex items-center w-fit gap-2 mb-4">
            <AngleLeftIcon class="w-5 h-5" />
            {{ Helper.translate('Back') }}
        </button>
        <div class="max-w-[500px]">
            <h1 class="text-lg font-semibold mb-4">{{ Helper.translate('Edit Category') }}</h1>
            <div class="relative mb-6">
                <CInput type="text" v-model="form.name" placeholder="Category Name" />
                <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.name, true) }}</span>
            </div>
            <div class="relative">
                <CSelect :options="categoryStatus" v-model="form.status"/>
                <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.status, true) }}</span>
            </div>
            <!-- <div class="relative">
                Is parent
                <Checkbox />
                <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.status, true) }}</span>
            </div> -->
            <div class="relative">
                <CSelect :options="categories" v-model="form.parent_id"/>
                <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.status, true) }}</span>
            </div>
            <button
                class="bg-green-500 text-white ml-auto block font-semibold px-4 py-2 rounded mt-2"
                :class="!!form.processing && 'pointer-events-none opacity-70'"
            >
                {{ Helper.translate('Update') }}
            </button>
        </div>
    </form>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import Checkbox from '@/Components/Global/Checkbox.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import useCategory from '@/Pages/Backend/AdminDashboard/useCategory.js'
import { useForm, usePage } from '@inertiajs/inertia-vue3'
import { isEmpty, filter, map } from 'lodash'
import Helper from '@/Helper'
import { onMounted } from '@vue/runtime-core'
import { ref } from 'vue'

const { activeComponent, selectedCategory, categoryStatus } = useCategory()
const page = usePage();
const form = useForm({
    id: selectedCategory.value.id,
    name: selectedCategory.value.name,
    status: selectedCategory.value.status,
    parent_id: selectedCategory.value.parent_id
})

const parentCategories = ref([]);
const categories = ref([]);

onMounted(()=>{
    parentCategories.value = filter(page.props.value.categories, item => item.is_parent)
    categories.value = map(filter(page.props.value.categories, item => isEmpty(item.is_parent)), item => {
        return {
            key: item.id,
            value: item.name
        };
    })
    categories.value.unshift({
        key: null,
        value: Helper.translate('Select parent')
    });
});

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