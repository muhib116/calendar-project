<template>
    <div class="px-10 py-10 bg-white text-black text-opacity-80 rounded-lg backdrop-blur-md relative">
        <button class="absolute right-4 top-4" @click="$emit('close')">
            <CloseIcon />
        </button>
        <GlobIcon class="w-10 h-10 opacity-80 mx-auto" />
        <h2 class="text-center mt-3 font-semibold">Change Site Language</h2>

        <div class="flex justify-center items-center gap-4 mt-10">
            <label @click="$emit('close')" class="flex items-center gap-2 cursor-pointer">
                <input type="radio" v-model="language" value="english" />
                English
            </label>
            <label @click="$emit('close')" class="flex items-center gap-2 cursor-pointer">
                <input type="radio" v-model="language" value="french" />
                Français
            </label>
            <label @click="$emit('close')" class="flex items-center gap-2 cursor-pointer">
                <input type="radio" v-model="language" value="portugues" />
                Portugues
            </label>
            <label @click="$emit('close')" class="flex items-center gap-2 cursor-pointer">
                <input type="radio" v-model="language" value="spanish" />
                Español
            </label>
        </div>
        <!-- <button class="block mx-auto px-6 uppercase py-1 bg-red-500 text-white mt-10 font-semibold rounded-3xl">Save</button> -->
    </div>
</template>

<script setup>
import { ref, watch, onMounted } from 'vue'
import CloseIcon from '@/Icons/CloseIcon.vue'
import GlobIcon from '@/Icons/GlobIcon.vue'

const language = ref('english')

watch(language, () => {
    localStorage.language = language.value
})
onMounted(() => {
    if(localStorage.language){
        language.value = localStorage.language
    }else{
        localStorage.language = 'english'
    }
})
</script>