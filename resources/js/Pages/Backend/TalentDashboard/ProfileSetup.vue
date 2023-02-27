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
                            <video ref="profileVideo" class="w-full">
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
                            <div class="relative mb-6">
                                <CSelect
                                    v-model="form.category_id"
                                    :options="getCategories"
                                />
                                <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.category_id, true) }}</span>
                            </div>
                            <h1 class="">
                                {{ Helper.translate('Change Subcategory') }}
                            </h1> 
                            <div class="relative mb-6">
                                <CSelect
                                    v-model="form.sub_category_id"
                                    :options="getSubCategories"
                                />
                                <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.sub_category_id, true) }}</span>
                            </div>
                            
                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                {{ form.progress.percentage }}%
                            </progress>
                            <button @click="handleSave" class="px-4 py-2 rounded text-xl bg-green-500 text-white font-bold text-center">
                                {{ Helper.translate('Save') }}
                            </button>
                        </div>
                    </div>
                    <div class="calendar flex flex-col customRatio">
                        <CalendarPreview :calendar="getCalendar" />
                    </div>
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import VideoIcon from '@/Icons/VideoIcon.vue'
import Video from '@/Components/Global/Video.vue'
import { useForm } from '@inertiajs/inertia-vue3'
import CloseIcon from '@/Icons/CloseIcon.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import Helper from '@/Helper'
import { computed, onMounted, ref } from 'vue'
import { filter, isEmpty, map } from 'lodash'
import CalendarPreview from '@/Components/Backend/TalentDashboard/CalendarPreview.vue'

const props = defineProps({
    categories: {
        type: Array,
        default: []
    },
    talent: {
        type: Object,
        default: {}
    }
})

const getCalendar = computed(() => {
    return props.talent.calendars.find(item => item.is_salable)
})

const form = useForm({
    video_file: null,
    category_id: '',
    sub_category_id: '',
})

const profileVideo = ref();

const getCategories = computed(()=>{
    if(!props.categories) return [{key: '', value: 'Select categories'}]; 
    let filtered = props.categories.filter(item => item.parent_id == null);
    if(!filtered) return [{key: '', value: 'Select categories'}]; 
    filtered = filtered.map(item => {
        return {
            key: item.id,
            value: item.name
        }
    })
    filtered.unshift({key: '', value: 'Select categories'})

    return filtered;
});

const getSubCategories = computed(()=>{
    let subCategory = map(
                        filter(props.categories, item => item.parent_id == form.category_id), 
                        item => {
                            return {
                                key: item.id,
                                value: item.name
                            }
                        }
                    )
    subCategory.unshift({key: '', value: 'Select subcategory'});
    console.log(subCategory);
    return subCategory;
});

onMounted(()=> {
    form.category_id = props.talent.category_id 
    form.sub_category_id = props.talent.sub_category_id 
})

const handleSave = () => {
    console.log(form.sub_category_id);
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