import './bootstrap';
import Swal from 'sweetalert2'

const btnSubmit = $('#btn-submit')
const contactForm = $('#contact-form')
const opinionInput = $('#opinion-input')

let isRequest = false


$("#input-name").keyup((e) => {
    $(e.currentTarget).removeClass('is-invalid')
    $("#error-name").addClass('d-none')
})

$("#input-email").keyup((e) => {
    $(e.currentTarget).removeClass('is-invalid')
    $("#error-email").addClass('d-none')
})

$('#input-phone').keyup((e) => {
    $(e.currentTarget).removeClass('is-invalid')
    $("#error-phone").addClass('d-none')
})

$('#input-subject').change((e) => {
    $(e.currentTarget).removeClass('is-invalid')
    $("#error-subject").addClass('d-none')
})

$('#input-content').change((e) => {
    $(e.currentTarget).removeClass('is-invalid')
    $("#error-content").addClass('d-none')
})

btnSubmit.click((e) => {
    e.preventDefault()
    if (!opinionInput.prop('checked')) {
        opinionInput.addClass('is-invalid')
    } else {
        btnSubmit.prop('disabled', true)
        if (!isRequest) {
            isRequest = true
            contactForm.submit()
        }
    }
})
console.log(contactForm.attr('data-notification'))
if (contactForm.attr('data-notification')) {

    if (contactForm.attr('data-notification-type') === 'success') {
        Swal.fire({
            title: '成功',
            text: contactForm.attr('data-notification-message'),
            icon: 'success',
            confirmButtonText: '近い'
        })
    }
    else if (contactForm.attr('data-notification-type') === 'error') {
        Swal.fire({
            title: 'エラー',
            text: contactForm.attr('data-notification-message'),
            icon: 'error',
            confirmButtonText: '近い'
        })
    }
}
