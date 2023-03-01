// import { weeksList, listOfMonth } from "@/calendarData"
import { cloneDeep, get } from "lodash"
// import { usePage } from '@inertiajs/inertia-vue3'
// import { Inertia } from "@inertiajs/inertia"
// import { toast } from "react-toastify"
import { ref, computed } from "vue"
import { DemoImageListForCalendar, defaultWeeksList, weeksList } from '@/Components/Backend/TalentDashboard/Calendar/calendarData.js'
// import axios from "axios"

const calendarPayload = ref({
    year: new Date().getFullYear(),
    selectedPageIndex: 0,
    language: 'english',
    weekStartDay: 0,
    theme: 'black',
    settings: cloneDeep(DemoImageListForCalendar)
})

export default function useCalendar() 
{

    // const { 
    //     serverData, 
    //     activeWeekIndex, 
    //     setSelectedWeek, 
    //     calendarTheme, 
    //     calendarImages, 
    //     setCalendarImages, 
    //     selectedMonth, 
    //     selectedYear, 
    //     calendarPrice,
    //     weeks, 
    //     setWeeks, 
    //     language
    // } = useContext(calendarContext)
    
    // const { auth } = usePage().props
    const getDateList = computed(() => {
        let selectedMonth = calendarPayload.value.selectedPageIndex
        let selectedYear = calendarPayload.value.year
        // Note: month and week index start from 0
        const dateList = []

        // work with previous month---
        let prevMonthLastDay = new Date(selectedYear, selectedMonth, 0).getDay()
        let selectedMonthFirstDay = new Date(selectedYear, selectedMonth, 1).getDay()
        let prevMonthLastDate    = new Date(selectedYear, selectedMonth, 0).getDate()
        const selectedMonthFirstDayIndexAccordingToModifiedWeeks = weeksList.value.find(item => item.key == selectedMonthFirstDay).key

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
        const selectedMonthLastDayIndexAccordingToModifiedWeeks = weeksList.value.find(item => item.key == selectedMonthLastDay).key
        
        for(let i = 1; i < (7 - selectedMonthLastDayIndexAccordingToModifiedWeeks); i++){
            dateList.push({
                date: i,
                isActive: false,
                isInactive: true
            })
        }
        
        return dateList
    })

    const weekChanger = (weekIndex) => {
        let myWeeks = cloneDeep(defaultWeeksList)
        let modifiedWeeks = {}

        let splicedWeeks = myWeeks.splice(weekIndex)
        modifiedWeeks = (splicedWeeks.concat(myWeeks))

        calendarPayload.weekStartDay = weekIndex
        weeksList.value = modifiedWeeks
    }

    // const saveCalendar = () => 
    // {
    //     let data = {
    //         user_id: auth.user.id,
    //         year: selectedYear,
    //         month: selectedMonth,
    //         language,
    //         week: activeWeekIndex,
    //         theme: calendarTheme,
    //         settings: calendarImages
    //     }

    //     let isValid = true
    //     calendarImages.forEach(item => {
    //         if(item.path == ''){
    //             isValid = false
    //         }
    //     })

    //     if(!isValid){
    //         toast.error('Some calendar image is missing !', {
    //             position: "top-right",
    //             autoClose: 4000,
    //             hideProgressBar: false,
    //             closeOnClick: true,
    //             pauseOnHover: true,
    //             draggable: true,
    //             progress: undefined,
    //             theme: "light",
    //         })
    //         return
    //     }

    //     Inertia.post(route('calendar_save', data))
    //     toast.success('Calendar Saved !', {
    //         position: "top-right",
    //         autoClose: 4000,
    //         hideProgressBar: false,
    //         closeOnClick: true,
    //         pauseOnHover: true,
    //         draggable: true,
    //         progress: undefined,
    //         theme: "light",
    //     })

    //     setCalendarImages(cloneDeep(DemoImageListForCalendar))
    // }

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

    // const deleteCalendar = (calendar_id) => {
    //     Inertia.delete(route('calendar_delete', calendar_id))
    //     toast.warn('Calendar Deleted !', {
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

    // const makeCalendarSaleable = (calendar_id) => {
    //     Inertia.post(route('salable', calendar_id))
    //     toast.success('Now This Calendar Is Salable !', {
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

    // const getSelectedCalendarData = () => 
    // {
    //     const monthName = get(listOfMonth, `${selectedMonth}.english`)
    //     let filteredImageData = {}
    //     if(monthName){
    //         filteredImageData = calendarImages.find(img => img.name == monthName)
    //     }else{
    //         if(selectedMonth == '-1'){
    //             // cover photo
    //             filteredImageData = calendarImages.find(img => img.name == 'cover')
    //         }
    //         if(selectedMonth == '12'){
    //             // back photo
    //             filteredImageData = calendarImages.find(img => img.name == 'back')
    //         }
    //     }

    //     return filteredImageData
    // }
    const getPage = computed(() => {
        return calendarPayload.value.settings[calendarPayload.value.selectedPageIndex]
    })

    return {
        getDateList,
        weekChanger,
        // saveCalendar,
        // updateCalendar,
        // deleteCalendar,
        // updateCalendarPrice,
        // makeCalendarSaleable,
        // getSelectedCalendarData,
        calendarPayload,
        getPage
    }
}