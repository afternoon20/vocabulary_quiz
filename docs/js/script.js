var deleteModal = document.getElementById('deleteModal')
var deleteInput = document.getElementById('deleteInput')

deleteModal.addEventListener('shown.bs.modal', function () {
    deleteInput.focus()
})
