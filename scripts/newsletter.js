document.addEventListener('DOMContentLoaded', event => {
    /* Toggle MyPIX toast */
    var newsletterSignupForm = document.querySelectorAll('.newsletter-signup');
    //var signupToNewsletterButton = document.querySelectorAll('.signup-to-newsletter');
    var newsletterToast = document.getElementById('newsletterToast');
    var newsletterToastError = document.getElementById('newsletterToastError');

    /* Loop igennem alle newsletter signup knapper */
    newsletterSignupForm.forEach(function(element) {
        var signupButton = element.querySelector('.signup-to-newsletter');
        var signupInput = element.querySelector('.newsletter-signup-text');
        signupButton.addEventListener('click', function(event) {
            /* Slå link fra */
            event.preventDefault();

            /* Hvis HTML formularen er valid (HTML5 validation) og signupInput ikke er tom */
            if (element.checkValidity() && signupInput.value) {
                newsletterToast.open();
            } else {
                newsletterToastError.open();
            }
        });
    }); 
});