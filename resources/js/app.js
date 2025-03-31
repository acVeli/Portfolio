document.addEventListener("DOMContentLoaded", () => {

    if(document.getElementById('home')) {

        let progressbars = document.querySelectorAll('.progress-bar');
        progressbars.forEach(progressbar => {
            let percent = progressbar.getAttribute('data-percent');
            progressbar.style.width = percent + '%';
        });

        let backToTop = document.getElementById('backToTop');
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                if(backToTop.classList.contains('inactive')) {
                    backToTop.classList.remove('inactive');
                }
                backToTop.classList.add('active');
                backToTop.style.animation = 'fromBottom 0.5s forwards';
            } else {
                backToTop.style.animation = 'toBottom 0.5s forwards';
                backToTop.classList.remove('active');
                backToTop.classList.add('inactive');
            }
        };
        backToTop.addEventListener('click', function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });

        let header = document.querySelector('header');
        let home = document.getElementById('home');

        function updateHomeBottom() {
            let homeHeight = home.getBoundingClientRect().height;
            let homeBottom = homeHeight + header.getBoundingClientRect().height;
            return homeBottom;
        }

        let homeBottom = updateHomeBottom();

        window.addEventListener('scroll', function() {
            if (window.scrollY > homeBottom) {
                header.classList.add('active');
            } else {
                header.classList.remove('active');
            }
        });

        // Mettre à jour homeBottom quand la fenêtre est redimensionnée
        window.addEventListener('resize', function() {
            homeBottom = updateHomeBottom();
        });



        let eventListenersInitialized = false;

        function initViewportLogic() {
            // Vérifier si la largeur de la fenêtre est inférieure ou égale à 1100px
            if (window.innerWidth <= 1100 && !eventListenersInitialized) {
                let menuBurger = document.getElementById('menu-burger');
                let menu = document.getElementById('menu');
                let menuClose = document.getElementById('menu-close');
                let body = document.body;
                let navLinks = document.querySelectorAll('.nav-links li a');

                function closeMenu() {
                    menu.classList.remove('active');
                    menuClose.classList.remove('active');
                    body.style.overflow = 'auto';
                }

                menuBurger.addEventListener('click', function () {
                    if (!menu.classList.contains('active')) {
                        menu.classList.add('active');
                        menuClose.classList.add('active');
                        body.style.overflow = 'hidden';
                    } else {
                        closeMenu();
                    }
                });

                menuClose.addEventListener('click', function () {
                    closeMenu();
                });

                navLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        closeMenu();
                    });
                });

                eventListenersInitialized = true; // Marquer que les événements sont déjà ajoutés
            }
        }

        // Exécuter la logique pour la première fois
        initViewportLogic();

        // Réappliquer la logique lors du redimensionnement de la fenêtre
        window.addEventListener('resize', () => {
            // Désactiver temporairement la logique si la largeur dépasse 1100px
            if (window.innerWidth > 1100) {
                eventListenersInitialized = false;
            }

            initViewportLogic();
        });
    }
});

    