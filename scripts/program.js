document.addEventListener('DOMContentLoaded', event => {
    initalizeFilters();
    initializeFilterToggles();
    initializeSearch();
});

function initalizeFilters() {
    console.log("Initializing Filters");

    /* Toggle filtre */
    var filterElement = document.querySelector('.program-search-filter');
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
}

function initializeFilterToggles() {
    var filters = [
        "subtitles",
        "language"
    ];

    /*filters.forEach(filter => {
        enableCheckboxToggles(filter);
    });*/

    handleMultipleFilters(filters);
}

function enableCheckboxToggles(name) {
    /* Gem alle elementerne for navnet givet til funktionen */
    var elements = document.querySelectorAll('.program-filter-' + name + ' label');

    /* Hvis elements har en værdi */
    if (elements) {
        /* For hver af elements gør: */
        elements.forEach(function(element) {
            /* Når elementet ændre sig */
            element.addEventListener('change', function(event) {
                var programListItems = getProgramListItems();

                programListItems.forEach(listItem => {
                    attributeString = listItem.getAttribute('data-' + name);

                    if (event.target.checked) {
                        if (attributeMatches(attributeString, event.target.value)) {
                            listItem.setAttribute('data-movie-filter-show', true);
                        } else {
                            listItem.setAttribute('data-movie-filter-show', false);
                        }
                    } else {
                        listItem.setAttribute('data-movie-filter-show', true);
                    }
                    
                });
            });
        });
    }
}

/*
Lav tomt array

Kør igennem filtre
    Hvis filter er true
        Tilføj filter navn og værdi til array

Kør igennem film
    Lav variabel der er false
    Kør igennem true filtre
        Hvis filter matcher film
            Sæt variabel til true
    Hvis variabel er true
        Sæt filter show til true
    Ellers 
        Sæt filter show til false       
*/

function handleMultipleFilters(allFilterNames) {
    var activatedFilters = [];

    allFilterNames.forEach(filterName => {
        var currentFilters = document.querySelectorAll('.program-filter-' + filterName + ' label');

        currentFilters.forEach(currentFilter => {
            var activatedFilter = generateFilterValuePair(filterName, currentFilter.firstElementChild.value, currentFilter.firstElementChild.checked);

            activatedFilters.push(activatedFilter);
            applyMultipleFilters(activatedFilters);

            currentFilter.addEventListener('change', event => {
                if (activatedFilters.indexOf(activatedFilter) !== -1) {
                    activatedFilters[activatedFilters.indexOf(activatedFilter)].checked = event.target.checked;
                    //activatedFilters.push(activatedFilter);
                    applyMultipleFilters(activatedFilters);
                } else {
                    console.log("Already got that filter activated.");
                }
            });
        });
    });
}

function applyMultipleFilters(activatedFiltersArray) {
    //console.log("Activated Filters Array", activatedFiltersArray);
    var programListItems = getProgramListItems();

    programListItems.forEach(listItem => {
        var shouldShow = false;
        activatedFiltersArray.forEach(activatedFilter => {
            //console.log("Activated Filter", activatedFilter);
            attributeString = listItem.getAttribute('data-' + activatedFilter.filter);

            if (activatedFilter.checked === true) {
                if (attributeMatches(attributeString, activatedFilter.value)) {
                    console.log("Match", listItem.getAttribute('data-' + activatedFilter.filter));
                    shouldShow = true;
                } else {
                    console.log("No match");
                }
            } else if (hasCheckedFilters(activatedFiltersArray) === 0) {
                shouldShow = true;
            }
        });

        if (shouldShow === true) {
            listItem.setAttribute('data-movie-filter-show', true);
        } else {
            listItem.setAttribute('data-movie-filter-show', false);
        }
        
    });
}

function hasCheckedFilters(allFiltersArray) {
    count = 0;
    allFiltersArray.forEach(filter => {
        if (filter.checked === true) {
            count++;
        }
    });

    return count;
}

/* Generate an object with a key value pair */
function generateFilterValuePair(getKey, getValue, getChecked) {
    return { 
        filter: getKey,
        value: getValue,
        checked: getChecked
    };
}

function initializeSearch() {
    console.log("Initializing Search");

    var searchField = document.querySelector('.program-search-field');
    var searchTypingInterval = 500;
    var searchTypingTimer;

    if (searchField) {
        console.log("Search Field Found");

        searchField.addEventListener('keyup', event => {
            clearTimeout(searchTypingTimer);
            searchTypingTimer = setTimeout(function() {
                programSearch(event.target.value);
            }, searchTypingInterval);
        });

        /* Hvis ?query=etellerandet så kør en søgning med det samme */
        if (searchField.value != "") {
            programSearch(searchField.value);
        }
    }
}

function programSearch(searchInput) {
    var programListItems = getProgramListItems();

    programListItems.forEach(listItem => {
        attributeString = listItem.getAttribute('data-movie-meta');

        if (attributeMatches(attributeString, searchInput)) {
            listItem.setAttribute('data-movie-search-show', true);
        } else {
            listItem.setAttribute('data-movie-search-show', false);
        }
    });
}

function attributeMatches(attribute, input) {
    attribute = attribute.toLowerCase();
    input = input.toLowerCase();

    if (attribute.indexOf(input) != - 1) {
        return true;
    } else {
        return false;
    }
}

function getProgramListItems() {
    return document.querySelectorAll('.program-list-item');
}