<template>
  <div class="p-4 bg-white h-full w-full overflow-x-auto self-end">
    <div class="h-full flex justify-center gap-2  overflow-x-auto text-xs w-full">
      <div 
        v-for="(item, index) in pages" 
        :key="item.name" 
        @click="calendarPayload.selectedPageIndex = index"
        class="cursor-pointer p-1 text-center grid items-end border rounded hover:shadow active:scale-95 min-w-[80px] max-w-[80px]"
        :class="calendarPayload.selectedPageIndex == index ? 'border-red-300 shadow-lg' : ''"
      >
        <div class="w-full h-[100px] overflow-hidden">
          <CalendarPage :selectedPageIndex="index" class="h-full relative" style="transform: scale(0.14); transform-origin: left top; height: 700px;" />
        </div>
        {{ getLabel(getSelectedPage(index).name) }}
      </div>
    </div>
  </div>
</template>

<script setup>
  import { computed } from 'vue'
  import CalendarPage from '@/Components/Backend/TalentDashboard/Calendar/CalendarPreview/index.vue'
  import useCalendar from '@/Components/Backend/TalentDashboard/Calendar/useCalendar.js'

  const { calendarPayload, getSelectedPage } = useCalendar()
  const pages = computed(() => {
    return calendarPayload.value.settings
  })

  const getLabel = (name) => {
    if(name == 'cover' || name == 'back'){
      return name
    }
    name = name.slice(0, 3)
    return `${name}-${calendarPayload.value.year}`
  }
</script>

<style scoped>
.wrapper > div{
  width: 80px;
}
</style>