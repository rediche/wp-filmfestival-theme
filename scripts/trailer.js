
/* 
    Lav et YouTube Video element 
    Dette er kode fra Google
*/
var ytAPITag = document.createElement('script');
ytAPITag.id = 'yt-iframe-api';
ytAPITag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(ytAPITag, firstScriptTag);

var trailer;
var frontpagePlayer;
function onYouTubeIframeAPIReady() {
    /* Trailer på filmside */
    trailer = new YT.Player('trailer-iframe', {
        events: {
            'onReady': onPlayerReady
        }
    });

    /* Video på forside */
    frontpagePlayer = new YT.Player('pix-trailer', {
        events: {
            'onReady': onFrontPlayerReady
        }
    });
}

function onPlayerReady(event) {
    /* Find trailer links på siden */
    var trailerLinks = document.querySelectorAll('[data-trailer]');
    
    /* Loop igennem alle de trailer links der er */
    trailerLinks.forEach(function(element) {
        /* Lav en click listener på et trailer link */
        element.addEventListener('click', function(event) {
            /* Åben det trailer overlay der passer med trailer linket */
            var trailerOverlay = getTrailerLinkRef(element);

            /* Vis trailer overlay */
            trailerOverlay.classList.add('show');

            /* Start trailer */
            trailer.playVideo();

            /* Lav en click listener, så man kan lukke traileren igen */
            trailerOverlay.addEventListener('click', function(event) {
                /* Luk kun hvis man klikker udenfor traileren og knapperne */
                if (event.target.nodeName === "DIV") {
                    trailer.stopVideo();
                    trailerOverlay.classList.remove('show');
                }
            });
        });
    });
}

function onFrontPlayerReady(event) {
    var trailerCover = document.querySelector('.trailer-cover');
    var trailerCoverButton = trailerCover.querySelector('.movie-card-playbutton');


    if (trailerCoverButton) {
        trailerCoverButton.addEventListener('click', function(event) {
            trailerCover.style.opacity = 0;
            trailerCover.style.pointerEvents = 'none';
            frontpagePlayer.playVideo();
        });
    }

}

/* Funktion til at finde element med ID der matcher et data-trailer attribut */
function getTrailerLinkRef(element) {
    /* Find ud af hvad data-trailer attributten har for en værdi */
    var trailerLinkRef = element.getAttribute('data-trailer');
    
    /* Find elementet med et ID der er tilsvarende data-trailer fra ovenstående */
    var trailerOverlay = document.getElementById(trailerLinkRef);

    /* returner elementet trailerOverlay */
    return trailerOverlay;
}

