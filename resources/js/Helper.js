import Swal from 'sweetalert2'


const Helper = {}

Helper.confirm = (msg, cb) => {
    let status = false
    Swal.fire({
        title: 'Warning',
        text: 'Are you sure to delete?',
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
    return date
}

Helper.priceFormate = (price) => {
    return price
}

Helper.translate = (text, isDynamic=false) => {
    return text
}

Helper.companyName = () => {
    return 'company name'
}

Helper.stripeKey = () => {
    return {
        public: '',
        private: ''
    }
}

export default Helper