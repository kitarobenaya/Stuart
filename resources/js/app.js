import "./bootstrap";

    document.addEventListener('DOMContentLoaded', () => {
        const allOpenControlMenu = document.querySelectorAll('.open-control-menu');
        const allCloseControlMenu = document.querySelectorAll('.close-control-menu');
        const navbar = document.querySelector('.navbar');

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

        window.addEventListener("scroll", () => {
            const scrollTop =
                window.scrollY || document.documentElement.scrollTop;

            const clientHeight =
                document.documentElement.clientHeight;

            const scrollHeight =
                document.documentElement.scrollHeight;

            if (scrollTop + clientHeight >= scrollHeight - 1) {
                navbar.classList.remove('fixed');
                navbar.classList.remove('bottom-10');
                navbar.classList.remove('w-[80%]');
                navbar.classList.add('absolute');
                navbar.classList.add('bottom-0');
                navbar.classList.add('w-full');
            }

            if (scrollTop + clientHeight < scrollHeight - 1) {
                navbar.classList.remove('absolute');
                navbar.classList.remove('bottom-0');
                navbar.classList.remove('w-full');
                navbar.classList.add('fixed');
                navbar.classList.add('bottom-10');
                navbar.classList.add('w-[80%]');
            }
        });
    })