import { ref } from 'vue'
import All from '@/Components/Backend/AdminDashboard/Country/All.vue'
import Add from '@/Components/Backend/AdminDashboard/Country/Add.vue'
import Edit from '@/Components/Backend/AdminDashboard/Country/Edit.vue'

const components = {
    All,
    Add,
    Edit
}
const activeComponent = ref('All')

export default function useCountry(){

    return {
        components,
        activeComponent
    }
}