<template>
    <div>
        <input type="file" @input="(e) => form.video = e.target.files[0]" accept="video/*" />
        <div class="font-bold mt-5">
            {{ Helper.translate('Write title') }}
            <div class="flex items-center gap-6">
                <!-- <CInput type="text" placeholder="Title" characterLimit="50" class="w-full" /> -->
                <div class="relative w-full">
                    <CInput v-model="form.title" type="text" placeholder="Title" class="w-full" />
                    <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.title, true) }}</span>
                </div>
                <button @click="handleSave" class="px-4 py-2 bg-red-500 text-white rounded">{{ Helper.translate('Post') }}</button>
            </div>
            {{ Helper.translate(get(form.progress, 'percentage'), true) }}%
            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                {{ get(form.progress, 'percentage') }}%
            </progress>
        </div>
        <hr class="mt-10" />
        <div class="rounded mt-10 grid grid-cols-4 gap-6">
            <div v-for="(post, index) in posts" :key="index" class="relative">
                <Video poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" />
                <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md">
                    <h3>{{ Helper.translate(post.title, true) }}</h3>
                    <button @click="handleDelete(post.id)" class="bg-red-500 text-white px-6 py-1 ml-auto block rounded mt-4 font-semibold">
                        {{ Helper.translate('Delete') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue';
import Video from '@/Components/Global/Video.vue'
import Helper from '@/Helper';
import { useForm, usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';
import { get } from 'lodash'

const posts = computed(() => {
    return usePage().props.value.posts
})
const form = useForm({
    title: null,
    video: null,
});

const handleSave = () => {
    form.post(route('talent.myLife.post'), {
        onSuccess() {
            form.reset()
        }
    });
}

const handleDelete = (id) => {
    Helper.confirm('Are you sure to delete this post?', ()=>{
        form.post(route('talent.myLife.postDelete', id));
    })
}

</script>

<style lang="scss" scoped>

</style>