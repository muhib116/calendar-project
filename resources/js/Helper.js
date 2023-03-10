import axios from 'axios'
import Swal from 'sweetalert2'
import moment from 'moment'

let languages = await axios.get('languages')
let settings = await axios.get('settings')

const Helper = {}

export const test = () => {
    return 'Test';
}

Helper.confirm = (msg=null, cb) => {
    let status = false
    Swal.fire({
        title: 'Warning',
        text: msg ? msg : 'Are you sure to delete?',
        icon: 'warning',
        confirmButtonColor: '#4acb6f',
        cancelButtonColor: '#ef4444',
        confirmButtonText: 'Confirm',
        cancelButtonText: 'Noا',
        showCancelButton: true,
        showConfirmButton: true
    })

    Swal.getConfirmButton().onclick = () => {
        Swal.clickCancel()
        cb()
    }
}

Helper.dateFormate = (date) => {
    if(settings.data && settings.data.dateFormate){
        return moment(date).format(settings.data.dateFormate)
    }
    return date
}

Helper.getCommission = (amount, commission=0) => {
    if(settings.data.commission){
        commission = settings.data.commission
    }
    return ((amount*commission)/100);
}

Helper.priceFormate = (price) => {
    if(settings.data && settings.data.currencyPosition){
        const { currencyPosition } = settings.data
        if(currencyPosition == 'right'){
            return `${price}$`
        }
    }

    return `$${price}`
}

Helper.translate = (text, isDynamic=false, language=null) => {
    let data = languages.data.find(item => {
        return item.english == text
    })

    if(language && data && data[language]){
        return data[language]
    }

    if(!isDynamic && data && data[localStorage.language]){
        return data[localStorage.language]
    }
    return text
}

Helper.companyName = () => {
    if(settings.data && settings.data.companyName){
        return settings.data.companyName
    }
}

Helper.logo = () => {
    if(settings.data && settings.data.logo){
        let logo = settings.data.logo
        return logo
    }
}

Helper.stripeKey = () => {
    let data = {
        public: '',
        privet: ''
    }
    if(settings.data &&  settings.data.stripePublicKey && settings.data.stripePrivatKey){
        data = {
            public: settings.data.stripePublicKey,
            privet: settings.data.stripePrivatKey
        }
    }
    return data
}

export default Helper