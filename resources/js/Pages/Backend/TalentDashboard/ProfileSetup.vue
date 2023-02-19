<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <div class="h-full flex flex-col justify-center">
                <div class="grid grid-cols-3 gap-6">
                    <div class="video">
                        <div class="relative hover:shadow-xl transition-all text-white" data-v-a1897544="">
                            <span v-if="form.video_file" @click="form.video_file=null" class="price cursor-pointer absolute top-4 z-10 right-4 shadow bg-red-500 font-bold p-2 rounded text-white">
                                <CloseIcon />
                            </span>
                            <label v-else class="price cursor-pointer absolute top-4 z-10 right-4 shadow bg-sky-500 font-bold p-2 rounded text-white">
                                <VideoIcon />
                                <input type="file" @input="form.video_file = $event.target.files[0]" class="hidden">
                            </label>
                            <video ref="profileVideo">
                                <source :src="`${$page.props.ziggy.url}/${talent.video_path}`">
                            </video>
                            <!-- <Video poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" class="" /> -->
                        </div>
                    </div>
                    <div class="grid items-center">
                        <div class="grid gap-4">
                            <a class="px-4 py-2 rounded text-xl bg-black text-white font-bold text-center">
                                {{ Helper.translate('View Profile') }}
                            </a>
                            <h1 class="">
                                {{ Helper.translate('Change Category') }}
                            </h1> 
                            <select class="" v-model="form.category_id">
                                <template v-for="(category, index) in categories" :key="index">
                                    <option :value="category.id">{{ category.name }}</option>
                                </template>
                            </select>
                            <h1 class="">
                                {{ Helper.translate('Change Subcategory') }}
                            </h1> 
                            <select class="" v-model="form.sub_category_id">
                                <template v-for="(category, index) in sub_categories" :key="index">
                                    <option :value="category.id">{{ category.name }}</option>
                                </template>
                            </select>
                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                {{ form.progress.percentage }}%
                            </progress>
                            <button @click="handleSave" class="px-4 py-2 rounded text-xl bg-green-500 text-white font-bold text-center">
                                {{ Helper.translate('Save') }}
                            </button>
                        </div>
                    </div>
                    <div class="calendar flex flex-col customRatio">
                        <div class="bg-red-100 h-full relative">
                            <span class="price absolute top-4 right-4 shadow bg-sky-500 font-bold p-2 rounded text-white">
                                <CameraIcon />
                            </span>
                            <img
                                class="block h-full w-full object-cover object-center"
                                src="https://images.unsplash.com/photo-1673762482215-33acd768cb46?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80">
                            <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md font-semibold truncate">
                                {{ Helper.translate('Calendar Name') }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import CameraIcon from '@/Icons/CameraIcon.vue'
import VideoIcon from '@/Icons/VideoIcon.vue'
import Video from '@/Components/Global/Video.vue'
import { useForm } from '@inertiajs/inertia-vue3'
import CloseIcon from '@/Icons/CloseIcon.vue'
import Helper from '@/Helper'
import { onMounted, ref } from 'vue'
import { isEmpty } from 'lodash'

const props = defineProps({
    categories: {
        type: Array,
        default: []
    },
    sub_categories: {
        type: Array,
        default: []
    },
    talent: {
        type: Object,
        default: {}
    }
})

const form = useForm({
    video_file: null,
    category_id: null,
    sub_category_id: null,
})

const profileVideo = ref();

onMounted(()=> {
    form.category_id = props.talent.category_id 
    form.sub_category_id = props.talent.sub_category_id 
})

const handleSave = () => {
    form.post(route('talent.profile.update'), {
        onSuccess(e) {
            if(isEmpty(e.props.errors)) {
                form.video_file = null;
                profileVideo.value.load();
            }
        }
    });
}


</script>


<style scoped>
.content {
    grid-template-columns: 250px 1fr;
}
</style>