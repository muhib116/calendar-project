<template>
    <div class="px-10 py-20 bg-[#000026] text-white text-opacity-80 rounded-lg backdrop-blur-md relative">
        <button class="absolute right-4 top-4" @click="$emit('close')">
            <CloseIcon />
        </button>
        <GlobIcon class="w-10 h-10 opacity-80 mx-auto" />

        <div class="flex justify-center items-center gap-4 mt-10 font-semibold text-2xl">
            <label class="flex items-center gap-2">
                <input type="radio" name="language" value="English" />
                English
            </label>
            <label class="flex items-center gap-2">
                <input type="radio" name="language" value="French" />
                Français
            </label>
            <label class="flex items-center gap-2">
                <input type="radio" name="language" value="Spanish" />
                Español
            </label>
        </div>

        <button class="block mx-auto px-6 uppercase py-1 bg-red-500 mt-10 font-semibold rounded-3xl text-2xl">Save</button>
    </div>
</template>

<script setup>
import CloseIcon from '@/Icons/CloseIcon.vue'
import GlobIcon from '@/Icons/GlobIcon.vue'
</script>

<style lang="scss" scoped>

</style>