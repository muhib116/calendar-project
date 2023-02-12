<template>
    <div>
        <h1 class="text-lg my-2 mb-4 flex items-center gap-6">Pages</h1>
        <CInput class="mb-4" type="text" :placeholder="Helper.translate('Title')" v-model="form.title" />
        <CInput class="mb-4" type="email" :placeholder="Helper.translate('Email')" v-model="form.email" />
        <ckeditor class="mb-4" :editor="ClassicEditor" v-model="form.description" :config="editorConfig"></ckeditor>
        <button @click="handleSave" class="border px-4 mt-3 mx-auto py-2 rounded bg-gray-800 text-white font-medium"> Save </button>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import { useForm } from '@inertiajs/inertia-vue3';
import CInput from '@/Components/Global/CInput.vue';
import Helper from '@/Helper';

const editorConfig = ref({});

const form = useForm({
    title: null,
    slug: null,
    email: null,
    settings: null,
    description: null,
});

const handleSave = () => {
    form.post(route('admin.savePage'));
}

</script>

<style lang="scss" scoped>

</style>