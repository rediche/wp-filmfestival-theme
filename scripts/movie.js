// Når siden er indlæst
document.addEventListener('DOMContentLoaded', event => {
    // Tag fat i alle elementerne med class: movie-mood-bar
    var movieProgressBars = document.querySelectorAll('.movie-mood-bar');

    // For hvert element med class: movie-mood-bar
    movieProgressBars.forEach(function(element) {
        // Tag fat i dens underelement med class: movie-mood-progress
        var progressMade = element.querySelector('.movie-mood-progress');

        // Tag fat i elementets værdi fra attributten: data-progress
        var progress = element.getAttribute('data-progress');

        // Hvis underelement med class: movie-mood-progress eksisterer
        if (progressMade) {
            // Sæt bredden på underelement med class: movie-mood-progress til
            // værdien fra attributten: data-progress i procent.
            progressMade.style.width = progress + '%';
        } else {
            progressMade.style.width = 0 + '%';
        }
    });
});

/*
EKSEMPEL:
<div class="movie-mood-bar" data-progress="85">
    <div class="movie-mood-progress"></div>
</div>

Tag fat i div.movie-mood-bar
Hvis den har div.movie-mood-progress i sig:
    Hent værdien fra div.movie-mood-bar's attribut: data-progress
    Sæt bredden af div.movie-mood-progress til at være 85% bred
*/