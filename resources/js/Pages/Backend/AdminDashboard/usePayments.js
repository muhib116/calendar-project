import PayoutRequest from '@/Components/Backend/AdminDashboard/Payments/PayoutRequest.vue'
import PayoutsProcessed from '@/Components/Backend/AdminDashboard/Payments/PayoutsProcessed.vue'
import TalentEarning from '@/Components/Backend/AdminDashboard/Payments/TalentEarning.vue'

import { ref } from 'vue'

const components = {
    PayoutRequest,
    PayoutsProcessed,
    TalentEarning
}
const activeComponent = ref('PayoutRequest')
export default function payments(){

    return {
        components,
        activeComponent
    }
}