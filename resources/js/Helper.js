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



export default Helper