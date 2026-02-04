import "./bootstrap";

    document.addEventListener('DOMContentLoaded', () => {
        const allOpenControlMenu = document.querySelectorAll('.open-control-menu');
        const allCloseControlMenu = document.querySelectorAll('.close-control-menu');

        allOpenControlMenu.forEach((openControlMenu) => {
            openControlMenu.addEventListener('click', (e) => {
                e.target.parentElement.nextElementSibling.classList.add('open');
                openControlMenu.parentElement.classList.add('hidden');
                e.preventDefault();
            })
        })

        allCloseControlMenu.forEach((closeControlMenu) => {
            closeControlMenu.addEventListener('click', (e) => {
                e.target.parentElement.parentElement.classList.remove('open');
                e.target.parentElement.parentElement.classList.add('close');
                e.target.parentElement.parentElement.previousElementSibling.classList.remove('hidden');

                setTimeout(() => {
                    e.target.parentElement.parentElement.classList.remove('close');
                }, 500);
                e.preventDefault();
            })
        })        
    })