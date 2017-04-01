document.addEventListener('DOMContentLoaded', event => {
    /* Toggle filtre */
    var filterElement  = document.querySelector('.program-search-filter');
    var filterContainer = document.querySelector('.program-filter');

    if (filterElement && filterContainer) {
        filterElement.addEventListener('click', function(event) {
            filterElement.classList.toggle('open');
            filterContainer.classList.toggle('open');
        }); 
    }

    /* Toggle individual filters */
    var filterDropdowns = document.querySelectorAll('[data-dropdown]');

    filterDropdowns.forEach(function(element) {
        var filterSubheading = element.querySelector('.program-filter-subheading');
        var filterDropdown = element.querySelector('.program-filter-dropdown');

        filterSubheading.addEventListener('click', function(event) {
            closeFilterDropdowns(element);
            element.setAttribute('data-dropdown', element.getAttribute('data-dropdown') === 'open' ? 'closed' : 'open');
        });
    });

    /* Close all open filter dropdowns */
    function closeFilterDropdowns(excludedElement) {
        var openFilterDropdowns = document.querySelectorAll('[data-dropdown=open]');
        openFilterDropdowns.forEach(function(element) {
            if (element != excludedElement) {
                element.setAttribute('data-dropdown', 'closed');
            }
        });
    }

    /* Submit form */
    var submitButton = document.querySelector('[data-filter-submit]');
    var resetButton = document.querySelector('[data-filter-reset]');
    var filterForm = document.querySelector('[data-filter-form]');

    if (submitButton) {
        submitButton.addEventListener('click', function(event) {
            event.preventDefault();
            mixer.forceRefresh();
            //filterForm.submit();
        });
    }

    if (resetButton) {
        resetButton.addEventListener('click', function(event) {
            event.preventDefault();
            mixer.filter('all');
            filterForm.reset();
        });
    }

    /* Mixitup */
    var mixitupContainer = document.querySelector('.program-list');
    var mixer;

    if (mixitupContainer) {
        mixer = mixitup(mixitupContainer, {
            selectors: {
                target: '.program-list-item'
            },
            animation: {
                duration: 300
            }
        });
    }

    /* Mixitup filters */
    // enableCheckboxToggles('language');
    // enableCheckboxToggles('subtitles');
    // enableCheckboxToggles('genre');
    // enableCheckboxToggles('venue');
    // enableCheckboxToggles('days');
    // enableCheckboxToggles('festival');

    // function enableCheckboxToggles(name) {
    //     /* Gem alle elementerne for navnet givet til funktionen */
    //     var elements = document.querySelectorAll('.program-filter-' + name + ' label');

    //     /* Hvis elements har en værdi */
    //     if (elements) {
    //         /* For hver af elements gør: */
    //         elements.forEach(function(element) {
    //             /* Hvis det enkelte element har børn */
    //             if (element.hasChildNodes()) {
    //                 /* Gem alle børnene til elementetet der er en checkbox */
    //                 var childElements = element.querySelectorAll('input[type=checkbox]');
    //                 /* Hvis der er nogle børn */ 
    //                 if (childElements) {
    //                     /* Kør igennem hvert barn */
    //                     childElements.forEach(function(childElement) {
    //                         /* Hvis barnet er checked */
    //                         if (childElement.checked) {
    //                             /* Slå filter til for det barn */
    //                             mixer.toggleOn('[data-' + name + '*="' + childElement.value + '"]');
    //                         }
    //                     });
    //                 }
    //             }

    //             /* Når elementet ændre sig */
    //             element.addEventListener('change', function(event) {
    //                 /* Hvis elementet er checked */
    //                 if (event.target.checked) {
    //                     /* Slå filter til for elementet */
    //                     mixer.toggleOn('[data-' + name + '*="' + event.target.value + '"]');
    //                 } else {
    //                     /* Ellers slå det fra */
    //                     mixer.toggleOff('[data-' + name + '*="' + event.target.value + '"]');
    //                 }
    //             });
    //         });
    //     }
    // }

    /* Søgefelt */
    var searchField = document.querySelector('.program-search-field');
    var searchTypingInterval = 500;
    var searchTypingTimer;
    var searchFilerCache = [];

    if (searchField) {
        searchField.addEventListener('keyup', function(event) {
            clearTimeout(searchTypingTimer);
            searchTypingTimer = setTimeout(function() {
                programSearch(event.target.value);
            }, searchTypingInterval);
        });
    }

    function programSearch(searchQuery) {
        var searchQueryFormatted = searchQuery.toLowerCase();
        var tags = searchQueryFormatted.split(' ');
        console.log("Tags: ", tags);

        function searchSelector(tag) {
            return '[data-movie-meta*="' + tag + '"]';
        } 

        Array.prototype.diff = function(a) {
            return this.filter(function(i) {return a.indexOf(i) < 0;});
        };

        console.log("Diff:", tags.diff(searchFilerCache));

        console.log("Search Filter Cache First", searchFilerCache);

        searchFilerCache.forEach((tag, index, array) => {
            mixer.toggleOff(searchSelector(tag)).then(console.log("Off:", tag, mixer.getState().activeFilter.selector));
            if (index === array.length) {
                console.log(mixer.getState().activeFilter.selector);
            }
        });

        tags.forEach((tag) => {
            mixer.toggleOn(searchSelector(tag)).then(console.log("On:", tag, mixer.getState().activeFilter.selector));
        });

        searchFilerCache = tags;
        console.log("Search Filter Cache End", searchFilerCache);

        console.log(mixer.getState().activeFilter.selector);
    }


});