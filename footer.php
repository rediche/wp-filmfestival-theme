<div class="container">
    <div class="row">
        <div class="col-xs">
            <footer class="content-card inverted page-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <ul class="page-footer-menu">
                            <li><a href="#0">Hovedkonkurrence</a></li>
                            <li><a href="#0">Publikumsprisen</a></li>
                            <li><a href="#0">Presse</a></li>
                            <li><a href="#0">Partnerer</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="page-footer-newsletter">
                            <p class="page-footer-newsletter-text">
                                Tilmeld dig vores nyhedsbrev og få de seneste nyheder om hvilke film der spiller på <strong>CPH PIX</strong>.
                            </p>
                            <form class="newsletter-signup">
                                <input type="email" class="newsletter-signup-text" placeholder="din@email.dk">
                                <span class="button newsletter-signup-button signup-to-newsletter">Tilmeld<paper-ripple></paper-ripple>
                                </span>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="page-footer-socialmedia">
                            <div class="row center-xs around-xs">
                                <div class="col-xs">
                                    <a href="#0" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-xs">
                                    <a href="#0" target="_blank"><i class="fa fa-instagram"></i></a>
                                </div>
                                <div class="col-xs">
                                    <a href="#0" target="_blank"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row partners">
                    <div class="col-xs-4 col-md-2">
                        <h4 class="partner-header">Hovedsponsor</h4>
                        <a href="#0"><img class="partner-image" src="<?php echo get_template_directory_uri(); ?>/images/partners/blockbuster.png" alt="..."></a>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <h4 class="partner-header">Logistiksponsor</h4>
                        <a href="#0"><img class="partner-image" src="<?php echo get_template_directory_uri(); ?>/images/partners/ups.png" alt="..."></a>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <h4 class="partner-header">Mediepartner</h4>
                        <a href="#0"><img class="partner-image" src="<?php echo get_template_directory_uri(); ?>/images/partners/politiken.png" alt="Politiken"></a>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <h4 class="partner-header">Offentlige partnere</h4>
                        <div class="row">
                            <div class="col-xs">
                                <a href="#0"><img class="partner-image" src="<?php echo get_template_directory_uri(); ?>/images/partners/filminstitut.png" alt="Dansk Filminstitut"></a>
                            </div>
                            <div class="col-xs">
                                <a href="#0"><img class="partner-image" src="<?php echo get_template_directory_uri(); ?>/images/partners/koebenhavn.png" alt="Københavns Kommune"></a>
                            </div>
                            <div class="col-xs">
                                <a href="#0"><img class="partner-image" src="<?php echo get_template_directory_uri(); ?>/images/partners/europemedia.png" alt="Europe Media"></a>
                            </div>
                            <div class="col-xs">
                                <a href="#0"><img class="partner-image" src="<?php echo get_template_directory_uri(); ?>/images/partners/images16.png" alt="Images 16"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>


    <!-- Toast der kommer når man klikker på Tilføj til MyPIX -->
    <paper-toast id="mypixToast" text="Filmen er tilføjet til din MyPIX liste."></paper-toast>
    <paper-toast id="mypixDeletedToast" class="error" text="Filmen er fjernet fra din MyPIX liste."></paper-toast>
    <paper-toast id="mypixProgram" text="Filmvisningen er tilføjet til dit MyPIX Program."></paper-toast>

    <!-- Toast der kommer når man klikker på Sign Up til Newsletter -->
    <paper-toast id="newsletterToast" text="Tak for signup!"></paper-toast>
    <paper-toast id="newsletterToastError" class="error" text="FEJL! Du skal indtaste en email adresse."></paper-toast>

    <!-- MyPIX Ticket -->
    <div id="mypixTicket" class="ticket-card">
        <div class="ticket-card-image">
            <h2 class="ticket-card-title">24 Weeks</h2>
        </div>
        <div class="ticket-card-content">
            <p>Tid: Fre. 17/03 - kl. 19.15</p>
            <address>
                Sted:<br>
                Grand Teatret<br>
                Mikkel Bryggers Gade 8<br>
                1460 København K
            </address>
        </div>
        <div class="ticket-card-actions">
            <span class="button tiny black" data-ticket-close>Luk
                <paper-ripple></paper-ripple>
            </span>
        </div>
    </div>

    <div id="overlay"></div>

    <!-- MyPIX Movie Card Tempalte -->
    <template id="movieTemplate">
        <div class="col-xs-12 col-sm-6 col-md-4" data-movie-id>
            <div class="movie-card-container">
                <a href="filmside.php" data-movie-permalink>
                    <div class="movie-card animated">
                        <img src="images/movies/thumbs/18453a_thumb.jpg" alt="..." data-movie-image>
                        <div class="movie-card-headline">
                            <h2 data-movie-title>The Demons</h2>
                            <p>Instr.: <span data-movie-director>Philippe Lesage</span></p>
                        </div>
                        <div class="movie-card-content">
                            <p data-movie-content>De voksne kan være dæmoner i børnenes verden. Til tider i skræmmende bogstavelig forstand. Philippe Lesage...</p>
                        </div>
                        <div class="movie-card-overlay"></div>
                    </div>
                    <paper-ripple></paper-ripple>
                </a>
                <div class="movie-card-buttons">
                    <a href="#0" class="button"><span data-movie-ticket>Køb Billet</span>
                        <paper-ripple></paper-ripple>
                    </a>
                    <a href="#0" class="button black"><span data-movie-program>Føj til Program</span>
                        <paper-ripple></paper-ripple>
                    </a>
                </div>
                <div class="movie-card-remove" data-movie-remove>
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <paper-ripple></paper-ripple>
                </div>
            </div>
        </div>
    </template>

    <!-- Ticket template -->
    <template id="ticketListTemplate">
        <a class="movie-schedule-entry" data-ticket-open>
            <p class="movie-schedule-venue" data-ticket-venue>Grand Teatret</p>
            <div class="movie-schedule-meta">
                <span class="movie-schedule-time"><strong data-ticket-title>24 Weeks</strong> - <span data-ticket-date>Fre. 17/03</span> - kl. <span data-ticket-time>19.15</span></span>
                <span class="movie-schedule-buy">Se billet</span>
            </div>
            <paper-ripple></paper-ripple>
        </a>
    </template>

    <?php wp_footer(); ?>
</body>
</html>