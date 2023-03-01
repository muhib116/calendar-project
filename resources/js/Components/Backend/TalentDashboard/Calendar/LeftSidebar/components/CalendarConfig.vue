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

<style lang="scss" scoped>

</style>


<!-- import { useContext } from 'react'
import calendarContext from '../../../../context/calendarContext'
import calendarIcon from '../../../../assets/icons/calendar.png'
import { defaultWeeksList, languageList, yearList } from '../../../../calendarData'
import useCalendar from '../../useCalendar'

export default function CalendarConfig() {
    const { 
        calendarTheme, 
        setCalendarTheme, 
        selectedMonth,
        selectedYear,
        setSelectedYear, 
        language, 
        setLanguage, 
        activeWeekIndex, 
        setActiveWeekIndex 
    } = useContext(calendarContext)

    const handleYear = (e) => {
        setSelectedYear(e.target.value)
    }
    const { weekChanger, getDateList } = useCalendar()
    
    return (
        <div className={ ['grid gap-6'].join(' ') }>
            
            {/* year start */}
            <label className={ ['grid gap-2'].join(' ') }>
                <span className='font-semibold'>Select year</span>
                <select 
                    onChange={ handleYear } 
                    className={ ['bg-transparent rounded border px-2 py-1'].join(' ') }
                    value={ selectedYear }
                >
                    {
                        yearList.map((year) => (
                            <option key={ year } value={ year }>{ year }</option>
                        )) 
                    }
                </select>
            </label>
            {/* year end */}

            
            {/* week start */}
            <label className={ ['grid gap-2'].join(' ') }>
                <span className='font-semibold'>Week start day</span>
                <select 
                    onChange={ (e) => {
                        let weekIndex = e.target.value
                        setActiveWeekIndex(weekIndex)
                        weekChanger(weekIndex)
                        getDateList(selectedMonth, selectedYear)
                    }}
                    className={ ['bg-transparent rounded border px-2 py-1'].join(' ') }
                    value={ activeWeekIndex }
                >
                    {
                        defaultWeeksList['english'].map((week, index) => (
                            <option key={ week } value={ index }>{ week }</option>
                        )) 
                    }
                </select>
            </label>
            {/* week end */}

            
            {/* language start */}
            <label className={ ['grid gap-2'].join(' ') }>
                <span className='font-semibold'>Language</span>
                <select 
                    onChange={ (e) => setLanguage(e.target.value) } 
                    className={ ['bg-transparent rounded border px-2 py-1'].join(' ') }
                    value={ language }
                >
                    {
                        languageList.map((language) => (
                            <option key={ language.toLocaleLowerCase() } value={ language.toLocaleLowerCase() }>{ language }</option>
                        )) 
                    }
                </select>
            </label>
            {/* language end */}

            
            {/* layout start */}
            <div className={ ['grid gap-2'].join(' ') }>
                <h3 className={ ['font-semibold'].join(' ') }>Layouts</h3>
                <div className={ ['grid grid-cols-2 gap-3 text-center'].join(' ') }>
                    <div 
                        className={[
                            'grid gap-1 cursor-pointer border p-2 rounded hover:shadow-md hover:border-gray-400 active:scale-95',
                            calendarTheme === 'white' && 'border-gray-400 scale-95'
                        ].join(' ')}
                        onClick={ () => setCalendarTheme('white') }
                    >
                        <img src={ calendarIcon } alt="" />
                        White
                    </div>
                    <div 
                        className={[
                            'grid gap-1 cursor-pointer border p-2 rounded hover:shadow-md hover:border-gray-400 active:scale-95',
                            calendarTheme === 'black' && 'border-gray-400 scale-95'
                        ].join(' ')}
                        onClick={ () => setCalendarTheme('black') }
                    >
                        <img className={ ['grayscale brightness-75'].join(' ') } src={ calendarIcon } alt="" />
                        Black
                    </div>
                </div>
            </div>
            {/* layout end */}
        </div>
    )
} -->