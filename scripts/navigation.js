document.addEventListener('DOMContentLoaded', event => {
    /* Toggle burger menu */
    var burgerElement = document.querySelector('.burger');
    var burgerElementIcon = document.querySelector('.burger .fa');
    var navigationMenu = document.querySelector('.main-navigation-items');
    
    if (burgerElement && burgerElementIcon && navigationMenu) { // Check om vi rent faktisk fik fat i Burger Elementet
        burgerElement.addEventListener('click', function(event) {
            navigationMenu.classList.toggle('open');
            burgerElementIcon.classList.toggle('fa-bars');
            burgerElementIcon.classList.toggle('fa-times');
        });
    }

    /* Toggle submenus */
    var subMenuElements = document.querySelectorAll('.sub-menu');

    /* Loop igennem alle submenus */
    subMenuElements.forEach(function(element) {
        var mediaQuery = window.matchMedia('(max-width: 768px)');

        if (mediaQuery.matches) {
            /* Find linket lige før submenuen i DOM'en */
            element.previousElementSibling.addEventListener('click', function(event) {
                /* Slå link fra */
                event.preventDefault();

                /* Toggle class'en "open" */
                element.classList.toggle('open');
            });
        }
    }); 
});