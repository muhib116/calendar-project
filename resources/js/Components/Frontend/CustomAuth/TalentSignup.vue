<template>
    <form @submit.prevent="submit" class="py-6 block" enctype="multipart/form-data">
        <div class="flex gap-5 justify-between mb-6">
            <div class="relative w-full">
                <CInput type="text" placeholder="First name" v-model="form.first_name" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.first_name }}</span>
            </div>
            <div class="relative w-full">
                <CInput type="text" placeholder="Last name" v-model="form.last_name" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.last_name }}</span>
            </div>
        </div>

        <div class="flex gap-5 justify-between mb-6">
            <div class="relative w-full">
                <CInput type="text" placeholder="Username (Known as)" v-model="form.username" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.username }}</span>
            </div>
            <div class="relative w-full">
                <CInput type="email" placeholder="Email" v-model="form.email" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.email }}</span>
            </div>
        </div>

        <div class="flex gap-5 justify-between mb-6">
            <div class="relative w-full">
                <CSelect v-model="form.country_id" :options="countries" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.country }}</span>
            </div>
            <div class="relative w-full">
                <CSelect v-model="form.category_id" :options="categories" placeholder="select category" class="w-full" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.category_id }}</span>
            </div>
        </div>

        <div class="flex gap-5 justify-between mb-6">
            <div class="relative w-full">
                <CInput type="password" placeholder="Password" v-model="form.password" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.password }}</span>
            </div>
            <div class="relative w-full">
                <CInput type="password" placeholder="Confirm Password" v-model="form.password_confirmation" />
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.password_confirmation }}</span>
            </div>
        </div>

        <div class="relative w-full mb-6">
            <CInput type="url" placeholder="Link" v-model="form.link" class="w-full" />
            <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.link }}</span>
        </div>

        <div class="mb-2">
            <p class="text-gray-500 mb-1">Verification: please upload a 5-10 sec video of yourself</p>
            <div class="fileUpload mb-4 relative">
                <input 
                    class="block w-full text-sm text-gray-900 border border-gray-400 p-2 rounded cursor-pointer bg-white focus:outline-none" 
                    aria-describedby="file_input_help" 
                    id="file_input" 
                    type="file"
                    @input="form.video = $event.target.files[0]"
                >
                <span class="absolute top-full left-0 text-xs text-red-500 mt-[2px]">{{ form.errors.video }}</span>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Max Upload Size 20MB.</p>
            </div>
            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                {{ form.progress.percentage }}%
            </progress>
        </div>

        <label class="flex items-center gap-2 select-none">
            <input type="checkbox" v-model="form.is_agree" />
            <div>
                I certify that I am at least 18 years old. I have read and I agree to the 
                <a href="#" class="text-[var(--link-color)]">Terms of service</a> 
                and <a href="#" class="text-[var(--link-color)]">Privacy policy</a>.
            </div>
        </label>

        <p class="mt-5 opacity-60">Please allow us, upto 72 hours to process your application.</p>
        <button 
            v-if="form.is_agree"
            class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block mt-6"
            :class="!!form.processing && 'pointer-events-none opacity-70'"
        >
            Send
        </button>

        <div v-else class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block w-fit pointer-events-none opacity-60 mt-6">
            Send
        </div>
    </form>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import { useForm } from '@inertiajs/inertia-vue3'
import axios from 'axios';
import { isEmpty } from 'lodash';

const countries = ref([{
    key: '',
    value: '-select country-'
}])

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
    video: '',
    link: '',
    password: '',
    password_confirmation: '',
    password_confirmation: '',
    is_agree: true,
    role: 'talent'
})

const submit = () => {
    if(form.country_id == 0){
        form.country_id = ''
    }
    if(form.category_id == 0){
        form.category_id = ''
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
        catRes.data.forEach(item => {
            categories.value.push({
                key: item.id,
                value: item.name
            })
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