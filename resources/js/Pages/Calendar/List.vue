<template>
    <Navigation />
    <div v-if="$page.props.calendars" class="grid gap-5 p-10">
        <CalendarItem v-for="item in $page.props.calendars" :key="item.id" :item="item" />
    </div>
    <Alert title="No calendar created!" />
</template>

<script setup>
import { onMounted } from 'vue'
import CalendarItem from '@/Components/Backend/TalentDashboard/Calendar/CalendarItem.vue'
import Navigation from '@/Components/Backend/TalentDashboard/Calendar/Navigation.vue'
import Alert from '@/Components/Global/Alert.vue'
import { usePage } from '@inertiajs/inertia-vue3'

onMounted(() => {
    console.log(usePage().props.value.calendars);
})

</script>