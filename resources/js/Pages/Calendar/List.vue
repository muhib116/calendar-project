<template>
    <Navigation />
    <div class="grid gap-5 p-10">
        <CalendarItem v-for="item in $page.props.calendars" :key="item.id" :item="item" />
    </div>
</template>

<script setup>
import CalendarItem from '@/Components/Backend/TalentDashboard/Calendar/CalendarItem.vue';
import Navigation from '@/Components/Backend/TalentDashboard/Calendar/Navigation.vue';
</script>