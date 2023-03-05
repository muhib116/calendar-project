<template>
    <div class="grid gap-6">
        <label class="grid gap-2">
            <span class="font-semibold">Select year</span>
            <CSelect :options="yearList" v-model="calendarPayload.year" />
        </label>
        <label class="grid gap-2">
            <span class="font-semibold">Week start day</span>
            <CSelect :options="defaultWeeksList" v-model="calendarPayload.weekStartDay" @change="weekChanger(calendarPayload.weekStartDay)" />
        </label>
        <label class="grid gap-2">
            <span class="font-semibold">Language</span>
            <CSelect :options="languageList" v-model="calendarPayload.language" />
        </label>
        <div class="grid gap-2">
            <h3 class="font-semibold">Layouts</h3>
            <div class="grid grid-cols-2 gap-3 text-center">
                <div 
                    @click="calendarPayload.theme = 'white'" 
                    class="grid gap-1 cursor-pointer border p-2 rounded hover:shadow-md hover:border-gray-400 active:scale-95" 
                    :class="calendarPayload.theme == 'white' && 'border-gray-400 scale-95'"
                >
                    <img src="@/assets/icons/calendar.png" alt="">
                    White
                </div>
                <div 
                    @click="calendarPayload.theme = 'black'" 
                    class="grid gap-1 cursor-pointer border p-2 rounded hover:shadow-md hover:border-gray-400 active:scale-95" 
                    :class="calendarPayload.theme == 'black' && 'border-gray-400 scale-95'"
                >
                    <img class="grayscale brightness-75" src="@/assets/icons/calendar.png" alt="">
                    Black
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import useCalendar from '@/Components/Backend/TalentDashboard/Calendar/useCalendar.js'
import { defaultWeeksList, languageList, yearList } from '@/Components/Backend/TalentDashboard/Calendar/calendarData.js'
import CSelect from '@/Components/Global/CSelect.vue';

const { calendarPayload, weekChanger } = useCalendar()
</script>