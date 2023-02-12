<template>
    <h1 class="text-lg my-2 mb-4 flex items-center gap-6">
        Language Data
        <button @click="showModal=true" class="bg-sky-500 font-bold text-sm px-4 py-1 rounded text-white">+ Add</button>
    </h1>
    <div class="grid grid-cols-3 mt-4 gap-6">
        <div class="border">
            <h2 class="border-b py-2 px-4 bg-gray-100">English</h2>
            <div class="p-4 pt-0">
                <CInput type="search" placeholder="Filter" />
                <div class="overflow-y-auto h-[450px] -ml-4 -mr-4">
                    <div v-for="index in 50" :key="index" class="border-b text-xs py-2 hover:bg-gray-100 px-4 flex gap-4 justify-between">
                        Hello test Hello test Hello test Hello test Hello test Hello test Hello test Hello test Hello test 
                        <button class="opacity-30 hover:opacity-100">
                            <EditIcon class="w-4 h-4"/>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="border">
            <h2 class="border-b py-2 px-4 bg-gray-100">Français</h2>
            <div class="p-4 pt-0">
                <CInput type="search" placeholder="Filter" />
                <div class="overflow-y-auto h-[450px] -ml-4 -mr-4">
                    <div v-for="index in 50" :key="index" class="border-b text-xs py-2 hover:bg-gray-100 px-4 flex gap-4 justify-between">
                        Hello test
                        <button class="opacity-30 hover:opacity-100">
                            <EditIcon class="w-4 h-4"/>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="border">
            <h2 class="border-b py-2 px-4 bg-gray-100">Español</h2>
            <div class="p-4 pt-0">
                <CInput type="search" placeholder="Filter" />
                <div class="overflow-y-auto h-[450px] -ml-4 -mr-4">
                    <div v-for="index in 50" :key="index" class="border-b text-xs py-2 hover:bg-gray-100 px-4 flex gap-4 justify-between">
                        Hello test
                        <button class="opacity-30 hover:opacity-100">
                            <EditIcon class="w-4 h-4"/>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Modal v-model="showModal">
        <div class="w-500 rounded p-10 bg-white">
            <h3 class="mb-4 font-bold">Add/Edit Text</h3>
            <div class="flex items-center gap-6 justify-center">
                <label class="flex items-center gap-4">
                    <input type="radio" v-model="selectedLanguage" name="language" value="english">
                    English
                </label>
                <label class="flex items-center gap-4">
                    <input type="radio" v-model="selectedLanguage" name="language" value="french">
                    English
                </label>
                <label class="flex items-center gap-4">
                    <input type="radio" v-model="selectedLanguage" name="language" value="spanish">
                    English
                </label>
            </div>
            <div class="mt-5 text-center">
                <CInput 
                    type="text" 
                    placeholder="Enter English text"
                    v-if="selectedLanguage == 'english'"
                    v-model="form.english"
                />
                <CInput
                    type="text" 
                    placeholder="Enter Franch text" 
                    v-if="selectedLanguage == 'french'"
                    v-model="form.french"
                />
                <CInput 
                    type="text" 
                    placeholder="Enter Spanish text" 
                    v-if="selectedLanguage == 'spanish'"
                    v-model="form.spanish"
                />
            </div>
            <div class="mt-5 flex gap-5 justify-center">
                <button @click="showModal=false" class="px-3 py-1 rounded bg-red-500 font-semibold text-white shadow-lg">Cancel</button>
                <button @click="handleSave" class="px-3 py-1 rounded bg-green-500 font-semibold text-white shadow-lg">Save/Update</button>
            </div>
        </div>
    </Modal>
</template>

<script setup>
import { ref } from 'vue'
import CInput from '@/Components/Global/CInput.vue'
import Modal from '@/Components/Library/Modal.vue'
import EditIcon from '@/Icons/EditIcon.vue'
import { useForm } from '@inertiajs/inertia-vue3'

const showModal = ref(false)
const selectedLanguage = ref('english')

const form = useForm({
    english: null,
    french: null,
    spanish: null,
    settings: null,
});

const handleSave = () => {
    form.post(route('admin.saveLanguage'), {
        onFinish() {
            showModal.value = false;
            form.english = null;
            form.french = null;
            form.spanish = null;
            form.settings = null;
        }
    });
}

</script>

<style lang="scss" scoped>

</style>