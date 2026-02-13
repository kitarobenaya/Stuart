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

            const offset = cekDevice() === 'Mobile' ? 65 : 1;

            if (scrollTop + clientHeight >= scrollHeight - offset) {
                navbar.classList.remove('fixed');
                navbar.classList.remove('bottom-10');
                navbar.classList.remove('w-[80%]');
                navbar.classList.add('absolute');
                navbar.classList.add('bottom-0');
                navbar.classList.add('w-full');
            }

            if (scrollTop + clientHeight < scrollHeight - offset) {
                navbar.classList.remove('absolute');
                navbar.classList.remove('bottom-0');
                navbar.classList.remove('w-full');
                navbar.classList.add('fixed');
                navbar.classList.add('bottom-10');
                navbar.classList.add('w-[80%]');
            }
        });

        function cekDevice() {
            const userAgent = navigator.userAgent;
            let device; 

            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(userAgent)) {
                device =  "Mobile";
            } else {
                device = "Desktop";
            }

            return device;
        }
    })