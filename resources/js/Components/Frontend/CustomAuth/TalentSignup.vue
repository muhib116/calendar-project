<template>
    <form @submit.prevent="submit" class="py-6 block" enctype="multipart/form-data">
        <div class="flex gap-5 justify-between mb-6">
            <div class="relative w-full">
                <CInput type="text" placeholder="First name" v-model="form.first_name" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.first_name, true) }}
                </span>
            </div>
            <div class="relative w-full">
                <CInput type="text" placeholder="Last name" v-model="form.last_name" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.last_name, true) }}
                </span>
            </div>
        </div>

        <div class="flex gap-5 justify-between mb-6">
            <div class="relative w-full">
                <CInput type="text" placeholder="Username (Known as)" v-model="form.username" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.username, true) }}
                </span>
            </div>
            <div class="relative w-full">
                <CInput type="email" placeholder="Email" v-model="form.email" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.email, true) }}
                </span>
            </div>
        </div>

        <div class="flex gap-5 justify-between flex-col mb-6">
            <div class="relative w-full">
                <CSelect v-model="form.country_id" :options="countries" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.country, true) }}
                </span>
            </div>
            <div class="relative w-full">
                <CSelect v-model="form.category_id" :options="categories" placeholder="select category" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.category_id, true) }}
                </span>
            </div>
            <div class="relative w-full">
                <CSelect v-model="form.sub_category_id" :options="sub_categories" placeholder="select category" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.category_id, true) }}
                </span>
            </div>
        </div>

        <div class="flex gap-5 justify-between mb-6">
            <div class="relative w-full">
                <CInput type="password" placeholder="Password" v-model="form.password" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.password, true) }}
                </span>
            </div>
            <div class="relative w-full">
                <CInput type="password" placeholder="Confirm Password" v-model="form.password_confirmation" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.password_confirmation, true) }}
                </span>
            </div>
        </div>

        <div class="relative w-full mb-6">
            <CInput type="url" placeholder="Link" v-model="form.link" class="w-full" />
            <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                {{ Helper.translate(form.errors.link, true) }}
            </span>
        </div>

        <div class="mb-2">
            <p class="text-gray-500 mb-1">
                {{ Helper.translate('Verification: please upload a 5-10 sec video of yourself') }}
            </p>
            <div class="fileUpload mb-4 relative">
                <input 
                    class="block w-full text-sm text-gray-900 border border-gray-400 p-2 rounded cursor-pointer bg-white focus:outline-none" 
                    aria-describedby="file_input_help" 
                    id="file_input" 
                    type="file"
                    @input="form.video = $event.target.files[0]"
                >
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">
                    {{ Helper.translate(form.errors.video, true) }}
                </span>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                    {{ Helper.translate('Max Upload Size 20MB') }}
                </p>
                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                    {{ form.progress.percentage }}%
                </progress>
            </div>
        </div>

        <label class="flex items-center gap-2 select-none">
            <input type="checkbox" v-model="form.is_agree" />
            <div>
                {{ Helper.translate('I certify that I am at least 18 years old. I have read and I agree to the') }}
                <Link target="_blank" :href="route('pages', 'terms-of-service')" class="text-[var(--link-color)]">
                    {{ Helper.translate('Terms of service') }}
                </Link> 
                and 
                <Link target="_blank" :href="route('pages', 'privacy-policy')" class="text-[var(--link-color)]">
                    {{ Helper.translate('Privacy policy') }}
                </Link>.
            </div>
        </label>

        <p class="mt-5 opacity-60">
            {{ Helper.translate('Please allow us, upto 72 hours to process your application') }}.
        </p>
        <button 
            v-if="form.is_agree"
            class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block mt-6"
            :class="!!form.processing && 'pointer-events-none opacity-70'"
        >
            {{ Helper.translate('Send') }}
        </button>
        
        <div v-else class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block w-fit pointer-events-none opacity-60 mt-6">
            {{ Helper.translate('Send') }}
        </div>
    </form>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue'
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import { useForm, usePage } from '@inertiajs/inertia-vue3'
import axios from 'axios'
import { isEmpty, map, filter } from 'lodash'
import Helper from '@/Helper'
import { Link } from '@inertiajs/inertia-vue3'

const countries = ref([{
    key: '',
    value: '-select country-'
}])

const all_categories = ref([]);

const categories = ref([{
    key: 0,
    value: '-select category-'
}])


const emit = defineEmits('close')
const form = useForm({
    first_name: '',
    last_name: '',
    name: '',
    username: '',
    email: '',
    country_id: '',
    category_id: 0,
    sub_category_id: 0,
    video: '',
    link: '',
    password: '',
    password_confirmation: '',
    password_confirmation: '',
    is_agree: true,
    role: 'talent'
})

const sub_categories = computed(() => {
    let sub = map(
        filter(all_categories.value, item => item.parent_id == form.category_id),
        item => {
            return {
                key: item.id,
                value: item.name
            }
        }
    )
    sub.unshift({
        key: 0,
        value: '-select subcategory-'
    })
    return sub;
});


const submit = () => {
    if(form.country_id == 0){
        form.country_id = ''
    }
    if(form.category_id == 0){
        form.category_id = ''
    }
    if(form.sub_category_id == 0){
        form.sub_category_id = ''
    }

    form.name = `${form.first_name} ${form.last_name}`
    form.post(route('register'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation')
            form.country_id = ""
            form.category_id = 0
            if(isEmpty(form.errors)){
                emit('close')
            }
        }
    })
}

onMounted(async () => {
    let catRes = await axios.get('categories')
    if(!isEmpty(catRes.data)){
        all_categories.value = catRes.data;
        catRes.data.forEach(item => {
            if (!item.parent_id) {
                categories.value.push({
                    key: item.id,
                    value: item.name
                })
            }
        })
    }

    let countryRes = await axios.get('countries')
    if(!isEmpty(countryRes.data)){
        countryRes.data.forEach(item => {
            countries.value.push({
                key: item.id,
                value: item.name
            })
        })
    }
})



let person = {
    teacher: {
        name: 'niloy',
        age: 26
    },
    student: {
        name: 'niloy2',
        age: 22
    }
}


</script>

<style scoped>
    progress[value]{
        height: 10px;
        width: 100%;
    }
    progress[value]::-webkit-progress-value {
        background-image:
            -webkit-linear-gradient(-45deg, 
                                    transparent 33%, rgba(0, 0, 0, .1) 33%, 
                                    rgba(0,0, 0, .1) 66%, transparent 66%),
            -webkit-linear-gradient(top, 
                                    rgba(255, 255, 255, .25), 
                                    rgba(0, 0, 0, .25)),
            -webkit-linear-gradient(left, #09c, #f44);

        border-radius: 2px; 
        background-size: 35px 20px, 100% 100%, 100% 100%;
    }
</style>