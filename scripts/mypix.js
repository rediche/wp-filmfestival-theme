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

            var getCurrentMovies = JSON.parse(localStorage.getItem('movies'));

            if (getCurrentMovies === null) {
                getCurrentMovies = [];
            }

            var newMovie = {
                "id": element.getAttribute('data-movie-id'),
                "title": element.getAttribute('data-movie-title'),
                "permalink": element.getAttribute('data-movie-permalink'),
                "image": element.getAttribute('data-movie-image'),
                "content": element.getAttribute('data-movie-content'),
                "director": element.getAttribute('data-movie-director')
            };

            getCurrentMovies.push(newMovie);

            localStorage.setItem('movies', JSON.stringify(getCurrentMovies));

            /* Toggle class'en "open" */
            console.log("Clicked myPix Button");
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

        var retrievedMovies = JSON.parse(localStorage.getItem('movies'));
        var movieCardTemplate = document.getElementById('movieTemplate');

        retrievedMovies.forEach(function(movie) {
            var template = movieCardTemplate.content.cloneNode(true);

            template.querySelector('[data-movie-id]').setAttribute('data-movie-id', movie.id);
            template.querySelector('[data-movie-remove]').setAttribute('data-movie-remove', movie.id);
            template.querySelector('[data-movie-title]').innerHTML = movie.title;
            template.querySelector('[data-movie-permalink]').href = movie.permalink;
            template.querySelector('[data-movie-image]').src = movie.image;
            template.querySelector('[data-movie-content]').innerHTML = movie.content;
            template.querySelector('[data-movie-director]').innerHTML = movie.director;

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

                // Vis toast besked
                mypixDeletedToast.open();

                // Skjul element for nu. Ved opdatering af siden vil filmen ikke dukke op.
                elementToRemove.style.display = 'none';
            });
        });
    }

    var myTicketList = document.querySelector('[data-ticket-list]');

    if (myTicketList) {
        /* Add movies to tickets for debugging */
        if (localStorage.getItem('tickets') != null) {
            console.log("Already has some tickets");
        } else {
            /*var tickets = [{
                "id": 0,
                "title": "24 Weeks",
                "venue": "Grand Teatret",
                "image": "18405a",
                "date": "Lør. 18/03/17",
                "time": "19.15"
            },{
                "id": 1,
                "title": "Det hvide folk",
                "venue": "Palads",
                "image": "17634a",
                "date": "Fre. 17/03/17",
                "time": "18.20"
            }];*/

            var tickets = [];

            localStorage.setItem('tickets', JSON.stringify(tickets));
        }

        retrievedTickets = JSON.parse(localStorage.getItem('tickets'));
        ticketTemplate = document.getElementById('ticketListTemplate');

        retrievedTickets.forEach(ticket => {
            var template = ticketTemplate.content.cloneNode(true);

            template.querySelector('[data-ticket-venue]').innerHTML = ticket.venue;
            template.querySelector('[data-ticket-title]').innerHTML = ticket.title;
            template.querySelector('[data-ticket-date]').innerHTML = ticket.date;
            template.querySelector('[data-ticket-time]').innerHTML = ticket.time;

            myTicketList.appendChild(template);
        });
    }

    var addToTickets = document.querySelectorAll('[data-schedule-add]');
    var addedToProgram = document.getElementById('mypixProgram');

    addToTickets.forEach(ticket => {
        ticket.addEventListener('click', event => {

            var newTicket = {
                "id": 1,
                "title": ticket.getAttribute('data-schedule-movie'),
                "venue": ticket.getAttribute('data-schedule-venue'),
                "image": ticket.getAttribute('data-schedule-image'),
                "date": ticket.getAttribute('data-schedule-date'),
                "time": ticket.getAttribute('data-schedule-time')
            };

            var getTickets = JSON.parse(localStorage.getItem('tickets'));

            if (getTickets === null) {
                getTickets = [];
            }

            getTickets.push(newTicket);

            localStorage.setItem('tickets', JSON.stringify(getTickets));

            /* Show toast if toast is on the site */
            if (addedToProgram) {
                addedToProgram.show();
            }
        });
    });
});