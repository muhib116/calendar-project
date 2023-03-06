<template>
    <div class="flex gap-5 items-start">
        <div class="w-52 h-[330px] relative">
            <a href="calendar/edit/1">
                <div class="border h-full relative w-[200px] pointer-events-none">
                    <div class="shadow h-full" id="calendar_main_wrapper">
                        <img v-if="getImage(item)" class="h-full w-full block object-cover object-center" :src="getImage(item)" alt="">
                    </div>
                    <h1 class="whitespace-nowrap mt-2 text-center font-bold">{{ getCoverName(item) }}</h1>
                </div>
            </a>
        </div>
        <label>
            $ <input type="number" min="0" class="py-1 border-gray-300 bg-transparent" value="0">
        </label>
        <div class="flex gap-4 items-baseline">
            <button class="px-4 py-1 bg-green-500 rounded shadow">Update</button>
            <button @click="deleteCalendar(item.id)" class="px-4 py-1 bg-red-500 text-white rounded shadow">Delete</button>
            <label @click="makeCalendarSaleable(item.id)" class="flex gap-2 items-center cursor-pointer">
                <input type="radio" value="1" v-model="item.is_salable">
                Move to profile
            </label>
        </div>
    </div>
</template>

<script setup>
    import useCalendar from './useCalendar'
    import { onMounted } from 'vue'

    defineProps({
        item: Object
    })

    const getCoverName = (item) => {
        return item.settings[0].text.title || ''
    }

    const getImage = (item) => {
        return item.settings[0].path
    }

    const { deleteCalendar, makeCalendarSaleable } = useCalendar()
    onMounted(() => {
       console.log('mounted'); 
    })
</script>

<style lang="scss" scoped>

</style>