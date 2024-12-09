const showFormAdd = document.querySelectorAll('.showFormAdd');
const showFormEdit = document.querySelectorAll('.edit')

const formAdd = document.querySelector('.formAdd');
const formEdit = document.querySelector('.formEdit');

const closeForm = document.querySelectorAll('#close');

// show form add
showFormAdd.forEach(add => {
    add.addEventListener('click', () => {
        
        formAdd.classList.remove('hidden');
    })
})

// show form edit
showFormEdit.forEach(edit => {
    edit.addEventListener('click', () => {
        
        formEdit.classList.remove('hidden');
    })
})

// close form
closeForm.forEach(close => {
    close.addEventListener('click', (e) => {
        e.preventDefault();
        formAdd.classList.add('hidden')
        formEdit.classList.add('hidden')
        
    })
})