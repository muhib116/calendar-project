<template>
    <div
        class="body"
        :class="calendarPayload.theme == 'black' ? 'bg-gray-800 text-white' : ''"    
    >
        <div class='flex justify-between items-end px-6 py-4' style="background-color: #9992;">
          <div class='font-medium italic text-xl capitalize'>{{ Helper.translate(listOfMonth[calendarPayload.selectedPageIndex].value, false, calendarPayload.language) }}</div>
          <div class='text-orangered-500 font-bold text-red-400 italic text-3xl'>{{ Helper.translate(calendarPayload.year, false, calendarPayload.language) }}</div>
        </div>

        <div class='p-4 pt-0 text-xs'>
          <div class='grid grid-cols-7'>
            <span v-for="(week, index) in weeksList" :key="index" class=" text-semibold text-center px-2 py-2">
                {{ Helper.translate(week.value, false, calendarPayload.language).slice(0, 3) }}
            </span>
          </div>

          <div class='grid grid-cols-7'>
            <span 
                v-if="calendarPayload.selectedPageIndex > 0 && calendarPayload.selectedPageIndex < 13"
                v-for="(item, index) in getDateList"
                :key="`item-${index}`"
                class="text-semibold text-center px-2 py-2"
                :class="[item.isInactive && 'opacity-30', item.isActive && 'bg-red-400 font-bold']"
            >
                {{ item.date }}
            </span>
          </div>
        </div>
      </div>
</template>

<script setup>
import { weeksList, listOfMonth } from '@/Components/Backend/TalentDashboard/Calendar/calendarData.js'
import useCalendar from '@/Components/Backend/TalentDashboard/Calendar/useCalendar.js'
import Helper from '@/Helper'

const { calendarPayload, getDateList } = useCalendar()
</script>