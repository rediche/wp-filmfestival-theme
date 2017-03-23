document.addEventListener('DOMContentLoaded', event => {
    var movieProgressBars = document.querySelectorAll('.movie-mood-bar');

    movieProgressBars.forEach(function(element) {
        var progressMade = element.querySelector('.movie-mood-progress');
        var progress = element.getAttribute('data-progress');
        if (progressMade) {
            progressMade.style.width = progress + '%';
        } else {
            progressMade.style.width = 0 + '%';
        }
    });
});