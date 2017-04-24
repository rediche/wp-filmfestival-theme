document.addEventListener('DOMContentLoaded', event => {
    /* Toggle MyPIX toast */
    var addToMyPIXButton = document.querySelectorAll('.add-to-mypix');
    var mypixToast = document.getElementById('mypixToast');

    /* Loop igennem alle MyPIX knapper */
    addToMyPIXButton.forEach(function(element) {
        /* Find linket lige før submenuen i DOM'en */
        element.addEventListener('click', function(event) {
            /* Slå link fra */
            event.preventDefault();

            // Hent film fra localstorage
            var getCurrentMovies = JSON.parse(localStorage.getItem('movies'));

            // Hvis der ikke er nogen film
            // Så lav en tom liste
            if (getCurrentMovies === null) {
                getCurrentMovies = [];
            }

            // Opret objekt der har data'en for filmen vi tilføjer
            var newMovie = {
                "id": element.getAttribute('data-movie-id'),
                "title": element.getAttribute('data-movie-title'),
                "permalink": element.getAttribute('data-movie-permalink'),
                "image": element.getAttribute('data-movie-image'),
                "content": element.getAttribute('data-movie-content'),
                "director": element.getAttribute('data-movie-director')
            };

            // Indsæt filmens objekt på listen
            getCurrentMovies.push(newMovie);

            // Gem den nye filmliste i localstorage
            localStorage.setItem('movies', JSON.stringify(getCurrentMovies));

            /* Åben toast'en der siger filmen er tilføjet */
            mypixToast.open();
        });
    }); 

    /* Show ticket */
    document.addEventListener('DOMContentLoaded', event => {
        var showTicketButtons = document.querySelectorAll('[data-ticket-open]');
        var closeTicketButton = document.querySelector('[data-ticket-close]');
        var ticketElement = document.getElementById('mypixTicket');
        var overlay = document.getElementById('overlay');

        showTicketButtons.forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();

                ticketElement.classList.toggle('open');
                overlay.classList.toggle('show');
                console.log("Opened");
            });
        });

        if (closeTicketButton) {
            closeTicketButton.addEventListener('click', function(event) {
                event.preventDefault();

                ticketElement.classList.toggle('open');
                overlay.classList.toggle('show');
            });
        }
    });

    // Find myPIX listen
    var myPIXMovieList = document.querySelector('[data-mypix-list]');

    /* Kør kun denne kode, hvis elementet med attributten data-mypix-list er på siden */
    if (myPIXMovieList) {
        /* Add movies to MyPIX List */
        if (localStorage.getItem('movies') != null) {
            console.log("Already got some movies");
        } else {
            var movies = [];
            localStorage.setItem('movies', JSON.stringify(movies));
        }

        // Hent film fra localstorage
        var retrievedMovies = JSON.parse(localStorage.getItem('movies'));

        // Hent templaten
        var movieCardTemplate = document.getElementById('movieTemplate');

        // For hver film vi har hentet fra localstorage
        retrievedMovies.forEach(function(movie) {
            // Kopier templaten
            var template = movieCardTemplate.content.cloneNode(true);

            // Udfyld template data
            template.querySelector('[data-movie-id]').setAttribute('data-movie-id', movie.id);
            template.querySelector('[data-movie-remove]').setAttribute('data-movie-remove', movie.id);
            template.querySelector('[data-movie-title]').innerHTML = movie.title;
            template.querySelector('[data-movie-permalink]').href = movie.permalink;
            template.querySelector('[data-movie-image]').src = movie.image;
            template.querySelector('[data-movie-content]').innerHTML = movie.content;
            template.querySelector('[data-movie-director]').innerHTML = movie.director;

            // Tilføj film til listen
            myPIXMovieList.appendChild(template);
        });

        /* Remove movie from MyPIX List */
        var removeMovieButtons = document.querySelectorAll('[data-movie-remove]');
        var mypixDeletedToast = document.getElementById('mypixDeletedToast');

        removeMovieButtons.forEach(function(element) {
            var movieID = element.getAttribute('data-movie-remove');
            var elementToRemove = document.querySelector('[data-movie-id="' + movieID + '"]');

            element.addEventListener('click', function() {
                // Returner kun film hvor ID'et ikke er det samme som filmen der bliver slettet
                var newMovieList = retrievedMovies.filter(function(movie) {
                    return movie.id != movieID;
                });

                retrievedMovies = newMovieList;

                // Opdater filmlisten i LocalStorage
                localStorage.setItem('movies', JSON.stringify(retrievedMovies));

                // Vis toast besked om at filmen er slettet
                mypixDeletedToast.open();

                // Skjul element for nu. Ved opdatering af siden vil filmen ikke dukke op.
                elementToRemove.style.display = 'none';
            });
        });
    }

    // Find billet listen
    var myTicketList = document.querySelector('[data-ticket-list]');

    if (myTicketList) {
        /* Add movies to tickets for debugging */
        if (localStorage.getItem('tickets') != null) {
            console.log("Already has some tickets");
        } else {
            var tickets = [];
            localStorage.setItem('tickets', JSON.stringify(tickets));
        }

        // Hent billetter fra localstorage
        retrievedTickets = JSON.parse(localStorage.getItem('tickets'));

        // Hent billet template
        ticketTemplate = document.getElementById('ticketListTemplate');

        // For hver billet
        retrievedTickets.forEach(ticket => {
            // Kopier templaten
            var template = ticketTemplate.content.cloneNode(true);

            // Udfyld template data
            template.querySelector('[data-ticket-venue]').innerHTML = ticket.venue;
            template.querySelector('[data-ticket-title]').innerHTML = ticket.title;
            template.querySelector('[data-ticket-date]').innerHTML = ticket.date;
            template.querySelector('[data-ticket-time]').innerHTML = ticket.time;

            // Tilføj billetten til billet listen
            myTicketList.appendChild(template);
        });
    }

    var addToTickets = document.querySelectorAll('[data-schedule-add]');
    var addedToProgram = document.getElementById('mypixProgram');

    addToTickets.forEach(ticket => {
        ticket.addEventListener('click', event => {

            // Lav objekt med data for billetten
            var newTicket = {
                "id": 1,
                "title": ticket.getAttribute('data-schedule-movie'),
                "venue": ticket.getAttribute('data-schedule-venue'),
                "image": ticket.getAttribute('data-schedule-image'),
                "date": ticket.getAttribute('data-schedule-date'),
                "time": ticket.getAttribute('data-schedule-time')
            };

            // Hent billet listen fra localstorage
            var getTickets = JSON.parse(localStorage.getItem('tickets'));

            // Hvis der ikke er nogen billetter
            // Lav en tom liste
            if (getTickets === null) {
                getTickets = [];
            }

            // Indsæt billet objektet på listen
            getTickets.push(newTicket);

            // Gem listen i localstorage
            localStorage.setItem('tickets', JSON.stringify(getTickets));

            /* Show toast if toast is on the site */
            if (addedToProgram) {
                addedToProgram.show();
            }
        });
    });
});