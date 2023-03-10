import { ref } from "vue"
import BasicConfig from '@/Components/Backend/AdminDashboard/Settings/BasicConfig/Index.vue'
import Pages from '@/Components/Backend/AdminDashboard/Settings/Pages/Index.vue'
import LanguageData from '@/Components/Backend/AdminDashboard/Settings/LanguageData/Index.vue'
import Faq from '@/Components/Backend/AdminDashboard/Settings/Faq/Index.vue'

let components = {
    BasicConfig,
    Pages,
    Faq,
    LanguageData
}

const activeComponent = ref('BasicConfig')

export default function useSettings(){

    return {
        components,
        activeComponent
    }
}