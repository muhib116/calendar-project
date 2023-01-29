<template>
    <div>
        <div class="">
            <button @click="activeComponent='All'" class="flex gap-4 items-center mb-4 font-semibold w-full pb-4">
                <AngleLeftIcon class="w-5 h-5" />
                Back
            </button>
        </div>
        <div class="max-w-[500px]">
            <h1 class="text-lg font-semibold mb-4">Edit Category</h1>
            <CInput type="text" placeholder="Category Name" />
            <CSelect :options="options" v-model="options[0].key"/>
            <button class="bg-green-500 text-white ml-auto block font-semibold px-4 py-2 rounded mt-2">Update</button>
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import useCategory from '@/Pages/Backend/AdminDashboard/useCategory.js'

const { activeComponent } = useCategory()

const options = [
    {
        key: null,
        value: 'Select Status'
    },
    {
        key: 1,
        value: 'Enable'
    },
    {
        key: 0,
        value: 'Disable'
    },
]
</script>

<style lang="scss" scoped>

</style>