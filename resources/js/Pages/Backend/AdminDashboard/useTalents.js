import { ref } from 'vue'
import Active from '@/Components/Backend/AdminDashboard/Talents/Active.vue'
import Deleted from '@/Components/Backend/AdminDashboard/Talents/Deleted.vue'
import ChangePassword from '@/Components/Backend/AdminDashboard/Talents/Details/ChangePassword.vue'
import WishSent from '@/Components/Backend/AdminDashboard/Talents/Details/WishSent.vue'

const components = {
    Active,
    Deleted
}
const activeComponent = ref('Active')

const detailsComponents = {
    WishSent,
    ChangePassword
}
const detailsActiveComponent = ref('WishSent')

export default function useUser(){

    return {
        components,
        activeComponent,
        detailsComponents, 
        detailsActiveComponent
    }
}