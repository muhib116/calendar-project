// import { useContext } from "react"
// import calendarContext from "@/context/calendarContext"
import axios from "axios"
import { usePage } from "@inertiajs/inertia-vue3"
import { cloneDeep, get, isEmpty } from 'lodash'
import { ref } from "vue"
import Helper from "@/Helper"
// import { listOfMonth } from '@/calendarData'

const allMedia = ref([])
export default function useMedia() {
    // const { selectedMonth, calendarImages, setCalendarImages, setMedia } = useContext(calendarContext)

    let timeoutId = null
    const getMedia = () => {
        clearTimeout(timeoutId)
        setTimeout(async () => {
            allMedia.value = await axios.get(`media/${usePage().props.value.auth.user.id}`).then(({data}) => data)
            return allMedia.value
        }, 1000)
    }
    
    const handleImage = (image) => {
        let monthName = get(listOfMonth, `${selectedMonth}.english`)
        let myCalendarImages = cloneDeep(calendarImages)
        let filteredImageData = {}

        if(monthName){
            filteredImageData = myCalendarImages.find(img => img.name == monthName)
        }else{
            if(selectedMonth == '-1'){
                // cover photo
                filteredImageData = myCalendarImages.find(img => img.name == 'cover')
            }
            if(selectedMonth == '12'){
                // back photo
                filteredImageData = myCalendarImages.find(img => img.name == 'back')
            }
        }
        
        if(isEmpty(filteredImageData)) return

        filteredImageData.path = image
        setCalendarImages(myCalendarImages)
    }

    const deleteMedia = (mediaId) => {
        // if(!confirm('Are you sure to delete?')) return
        Helper.confirm("Are you sure to delte?", async () => {
            let status = await axios.delete(`media/delete/${mediaId}/${usePage().props.value.auth.user.id}`)
            if(status) {
                getMedia()
            }
        })

    }

    return {
        getMedia,
        handleImage,
        deleteMedia,
        allMedia
    }
}