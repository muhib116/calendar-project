<template>
    <h1 class="text-lg my-2 mb-4 flex items-center gap-6">{{ Helper.translate('Crate Page') }}</h1>
    <div class="relative mb-6">
        <CInput type="text" v-model="form.title" :placeholder="Helper.translate('Title')" />
        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.title, true) }}</span>
    </div>
    <div class="relative w-full">
        <CSelect v-model="form.type" :options="pageTypes" placeholder="Select Type" class="w-full" />
        <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
            {{ Helper.translate(form.errors.type, true) }}
        </span>
    </div>
    <ckeditor class="mb-4" :editor="ClassicEditor" v-model="form.description" :config="editorConfig"></ckeditor>
    <button @click="handleSave" class="bg-green-500 text-white ml-auto block font-semibold px-4 py-2 rounded mt-2"> Save </button>
</template>

<script setup>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'
import { useForm } from '@inertiajs/inertia-vue3'
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import { ref } from 'vue'
import Helper from '@/Helper'
import { isEmpty } from 'lodash'

const editorConfig = ref({
    toolbar: {
        items: [
            'bold',
            'italic',
            'link',
            'bulletedList',
            'numberedList',
            'undo',
            'redo'
        ]
    }
})

const pageTypes = [{
    key: 'privacy-policy',
    value: Helper.translate('Privacy policy')
},
{
    key: 'terms-of-service',
    value: Helper.translate('Terms of service')
}]

const form = useForm({
    title: null,
    slug: null,
    settings: null,
    type: null,
    description: '',
})

const handleSave = () => {
    form.post(route('admin.savePage'), {
        onSuccess(e) {
            if (!isEmpty(e.props.errors)) return;
            form.reset()
            let editorContent = document.querySelector('.ck-editor__main>.ck-content');
            if (editorContent) editorContent.innerHTML = '';
        }
    })
}

</script>