import { ref } from 'vue'
import All from '@/Components/Backend/AdminDashboard/Category/All.vue'
import Add from '@/Components/Backend/AdminDashboard/Category/Add.vue'
import Edit from '@/Components/Backend/AdminDashboard/Category/Edit.vue'

const components = {
    All,
    Add,
    Edit
}
const activeComponent = ref('All')

export default function useCategory(){

    return {
        components,
        activeComponent
    }
}