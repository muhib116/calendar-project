<template>
    <div class="grid gap-3 py-4">
        <div class="grid grid-cols-2 gap-4">
            <label 
                class="flex items-center gap-2 relative rounded shadow w-full"
                :style="{backgroundColor: calendarPayload.settings[selectedCalendarIndex].text.style.color}"
            >
                <input
                    type="color"
                    name="color"
                    class="border-gray-400 opacity-0 absolute"
                    placeholder="Enter your title"
                    v-model="calendarPayload.settings[selectedCalendarIndex].text.style.color"
                />
            </label>
            <label class="grid items-center gap-2">
                <InputFontSize 
                    v-model="calendarPayload.settings[selectedCalendarIndex].text.style.fontSize"
                />
            </label>
        </div>

        <div class="grid gap-4">
            <label class="grid items-center gap-2">
                <CSelect 
                    :options="[
                        { key: null, value: '-Select-'},
                        { key: 'left', value: 'Left'},
                        { key: 'center', value: 'Center'},
                        { key: 'right', value: 'Right'},
                    ]" 
                    v-model="calendarPayload.settings[selectedCalendarIndex].text.style.textAlign"
                />
            </label>
            <label class="grid items-center gap-2">
                <CSelect 
                    :options="[
                        {key: null, value: '-Select-'},
                        {key: 'none', value: 'None'},
                        {key: 'underline', value: 'Under Line'},
                        {key: 'overline', value: 'Over Line'},
                    ]"
                    v-model="calendarPayload.settings[selectedCalendarIndex].text.style.textDecoration"
                />
            </label>
        </div>

        <div class="grid items-center gap-2 mt-4">
            <span @click="showFonts = !showFonts" class="font-semibold text-sm border px-4 py-2 flex justify-between items-center cursor-pointer">
                Select Font
                <svg class="w-4 h-4" viewBox="0 0 32 32"><path d="M4.219 10.781 2.78 12.22l12.5 12.5.719.687.719-.687 12.5-12.5-1.438-1.438L16 22.562Z"></path></svg>
            </span>
            <div v-if="showFonts" class="border">
                <div class="search -mb-[1px]">
                    <input type="search" placeholder="Search Font" v-model="fontFilterText" class="w-full block border-t border-b border-transparent border-t-gray-100 border-b-gray-100" />
                </div>
                <div class="h-[480px] overflow-y-auto">
                    <div 
                        v-for="(item, index) in getFonts" :key="index" 
                        class="px-4 py-2 border-b -mb-[1px] hover:bg-gray-100 cursor-pointer text-2xl"
                        :class="item.isSelected && 'bg-gray-100'" 
                        :style="{fontFamily: item.fontFamily, fontWeight: item.fontWeight}"
                        @click="makeFontSelected(item, getFonts)"
                    >
                        ABeeZee
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import useCalendar from '@/Components/Backend/TalentDashboard/Calendar/useCalendar.js'
import InputFontSize from './InputFontSize.vue'
import { ref, computed } from 'vue'
import useFont from '@/Components/Backend/TalentDashboard/Calendar/useFont.js'
import CSelect from '@/Components/Global/CSelect.vue';
import { isEmpty } from 'lodash';

const { calendarPayload, selectedCalendarIndex } = useCalendar()
const { fonts } = useFont()
const fontFilterText = ref('')
const showFonts = ref(false)

const getFonts = computed(() => {
    if(isEmpty(fontFilterText)) return fonts
    return fonts.value.filter(font => font.title.toLowerCase().indexOf(fontFilterText.value.toLowerCase())>=0)
})

const makeFontSelected = (item, FilteredFont) => {
    FilteredFont.forEach(_item => _item.isSelected = _item.title == item.title)
    calendarPayload.value.settings[selectedCalendarIndex.value].text.style.fontFamily = item.fontFamily
    calendarPayload.value.settings[selectedCalendarIndex.value].text.style.fontWeight = item.fontWeight
}
</script>