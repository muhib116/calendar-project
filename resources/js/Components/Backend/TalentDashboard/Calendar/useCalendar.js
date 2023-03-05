// import { weeksList, listOfMonth } from "@/calendarData"
import { cloneDeep, get } from "lodash"
// import { usePage } from '@inertiajs/inertia-vue3'
// import { Inertia } from "@inertiajs/inertia"
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';
import { ref, computed } from "vue"
import { DemoImageListForCalendar, defaultWeeksList, weeksList } from '@/Components/Backend/TalentDashboard/Calendar/calendarData.js'
import axios from "axios"
import { usePage } from "@inertiajs/inertia-vue3"
import { Inertia } from "@inertiajs/inertia";
import Helper from "@/Helper";


const calendarPayload = ref({
    user_id: null,
    year: new Date().getFullYear(),
    selectedPageIndex: new Date().getMonth() + 1,
    language: 'english',
    weekStartDay: 0,
    theme: 'black',
    settings: cloneDeep(DemoImageListForCalendar)
})

export default function useCalendar() 
{
    const auth = computed(() => usePage().props.value.auth)
    const getDateList = (selectedPageIndex) => {
        let selectedMonth = selectedPageIndex
        let selectedYear = calendarPayload.value.year
        // Note: month and week index start from 0
        const dateList = []

        // work with previous month---
        let prevMonthLastDay = new Date(selectedYear, selectedMonth, 0).getDay()
        let selectedMonthFirstDay = new Date(selectedYear, selectedMonth, 1).getDay()
        let prevMonthLastDate    = new Date(selectedYear, selectedMonth, 0).getDate()

        const selectedMonthFirstDayIndexAccordingToModifiedWeeks = weeksList.value.findIndex((item) => {
            return (item.value == defaultWeeksList[selectedMonthFirstDay].value)
        })

        for(let i=0; i < selectedMonthFirstDayIndexAccordingToModifiedWeeks; i++){
            dateList.push({
                date: (prevMonthLastDate-selectedMonthFirstDayIndexAccordingToModifiedWeeks)+(i+1),
                isActive: false,
                isInactive: true
            })
        }

        // work with current month -----
        const selectedMonthLastDate = new Date(selectedYear, selectedMonth+1, 0).getDate()
        for(let i = 1; i <= selectedMonthLastDate; i++)
        {
            let isActive = false
            let date = new Date()
            if(date.getFullYear() === selectedYear && date.getMonth() === selectedMonth && date.getDate() === i){
                isActive = true
            }

            dateList.push({
                date: i,
                isActive,
                isInactive: false
            })
        }
        
        // work with next month -----
        const selectedMonthLastDay = new Date(selectedYear, selectedMonth+1, 0).getDay()
        const selectedMonthLastDayIndexAccordingToModifiedWeeks = weeksList.value.findIndex((item) => {
            return (item.value == defaultWeeksList[selectedMonthLastDay].value)
        })
        
        for(let i = 1; i < (7 - selectedMonthLastDayIndexAccordingToModifiedWeeks); i++){
            dateList.push({
                date: i,
                isActive: false,
                isInactive: true
            })
        }
        
        return dateList
    }

    const weekChanger = (weekIndex) => {
        let myWeeks = cloneDeep(defaultWeeksList)
        let modifiedWeeks = {}

        let splicedWeeks = myWeeks.splice(weekIndex)
        modifiedWeeks = (splicedWeeks.concat(myWeeks))

        calendarPayload.weekStartDay = weekIndex
        weeksList.value = modifiedWeeks
    }

    const getSelectedPage = (index) => {
        return calendarPayload.value.settings[index]
    }

    const saveCalendar = () => 
    {
        calendarPayload.value.user_id = auth.value.user.id
        let isValid = !calendarPayload.value.settings.find(item => item.path == '')
        if(!isValid){
            toast.error('Some calendar\'s image is missing !', {
                position: "top-right",
                autoClose: 4000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
                progress: undefined,
                theme: "light",
            })
            return
        }

        console.log(Inertia.post(route('calendar_save', calendarPayload.value)));
        toast.success('Calendar Created Successfully !', {
            position: "top-right",
            autoClose: 4000,
            hideProgressBar: false,
            closeOnClick: true,
            pauseOnHover: true,
            draggable: true,
            progress: undefined,
            theme: "light",
        })
    }

    // const updateCalendar = () => {
    //     let data = {
    //         id: serverData.id,
    //         user_id: auth.user.id,
    //         year: selectedYear,
    //         month: selectedMonth,
    //         language,
    //         week: activeWeekIndex,
    //         price: calendarPrice,
    //         theme: calendarTheme,
    //         settings: calendarImages
    //     }

    //     axios.post(`/edit-calendar/${serverData.id}/${auth.user.id}`, data)
    //     toast.success('Calendar Updated !', {
    //         position: "top-right",
    //         autoClose: 4000,
    //         hideProgressBar: false,
    //         closeOnClick: true,
    //         pauseOnHover: true,
    //         draggable: true,
    //         progress: undefined,
    //         theme: "light",
    //     })
    // }

    // const updateCalendarPrice = (price, id) => {
    //     let data = {
    //         user_id: auth.user.id,
    //         id,
    //         price
    //     }

    //     Inertia.post(route('calendar_price_update', data))
    // }

    const deleteCalendar = (calendar_id) => {
        Helper.confirm('Are you sure to delete?', () => {
            Inertia.delete(route('calendar_delete', calendar_id))
            toast.warn('Calendar Deleted !', {
                position: "top-right",
                autoClose: 4000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
                progress: undefined,
                theme: "light",
            })
        })
    }

    const makeCalendarSaleable = (calendar_id) => {
        Inertia.post(route('salable', calendar_id))
        // toast.success('Calendar added to profile !', {
        //     position: "top-right",
        //     autoClose: 4000,
        //     hideProgressBar: false,
        //     closeOnClick: true,
        //     pauseOnHover: true,
        //     draggable: true,
        //     progress: undefined,
        //     theme: "light",
        // })
    }
    

    return {
        getDateList,
        weekChanger,
        saveCalendar,
        // updateCalendar,
        deleteCalendar,
        // updateCalendarPrice,
        makeCalendarSaleable,
        // getSelectedCalendarData,
        calendarPayload,
        getSelectedPage,
    }
}