<template>
    <Master>
        <CalendarPage :selectedPageIndex="calendarPayload.selectedPageIndex" />
        <PreviewChanger />
    </Master>
</template>

<script setup>
import Master from './Master.vue';
import useCalendar from '@/Components/Backend/TalentDashboard/Calendar/useCalendar.js'
import PreviewChanger from '@/Components/Backend/TalentDashboard/Calendar/PreviewChanger/index.vue'
import CalendarPage from '@/Components/Backend/TalentDashboard/Calendar/CalendarPreview/index.vue'

const { calendarPayload } = useCalendar()
</script>