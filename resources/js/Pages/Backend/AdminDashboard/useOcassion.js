import { ref } from 'vue'
import All from '@/Components/Backend/AdminDashboard/Ocassion/All.vue'
import Add from '@/Components/Backend/AdminDashboard/Ocassion/Add.vue'
import Edit from '@/Components/Backend/AdminDashboard/Ocassion/Edit.vue'

const components = {
    All,
    Add,
    Edit
}

const activeComponent = ref('All')
const selectedOcassion = ref({})

export default function useOcassion(){
    const ocassionStatus = ref([
        {
            key: '',
            value: 'Select Status'
        },
        {
            key: 1,
            value: 'Enable'
        },
        {
            key: 0,
            value: 'Disable'
        },
    ])

    return {
        components,
        activeComponent,
        selectedOcassion,
        ocassionStatus
    }
}