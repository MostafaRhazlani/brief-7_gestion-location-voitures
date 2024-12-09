const showFormAdd = document.querySelectorAll('.showFormAdd');
        const formAdd = document.querySelector('.formAdd');
        const closeForm = document.querySelectorAll('#close');
        console.log(closeForm);
        
        showFormAdd.forEach(add => {
            add.addEventListener('click', () => {
                console.log('jhhhhhhhhh');
                
                formAdd.classList.remove('hidden');
            })
        })

        closeForm.forEach(close => {
            close.addEventListener('click', (e) => {
                e.preventDefault();
                formAdd.classList.add('hidden')
                
            })
        })