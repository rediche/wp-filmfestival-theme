<?php get_header(); ?>

<div class="frontpage">
    <div class="container">
        <div class="row center-xs">
            <div class="col-xs-12">
                <div class="frontpage-header">
                    <h1 class="frontpage-header-title"><?php bloginfo(); ?></h1>
                    <p class="frontpage-header-subtitle"><?php bloginfo('description'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php get_sidebar('navigation');  ?>

    <div class="container">
        <div class="row">
            <div class="col-xs">
                <div class="content-card slider-card">
                    <h2 class="content-card-extras-title no-margin">Udvalgte film</h2>
                    <div class="slider-items row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/18405a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>24 Weeks</h2>
                                            <p>Instr.: Anne Zohra Berrached</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Livet er godt hos standupperen Astrid. Hun har succes og gang i karrieren, et lækkert hus i forstaden, en sød kæreste-skråstreg-manager...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/17634a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>Det hvide folk</h2>
                                            <p>Instr.: Lisa Aschan</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Alex bliver samlet op foran en grønthandler og ført til et underjordisk fængsel for ubudne gæster, der skal deporteres fra Sverige...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/18453a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>The Demons</h2>
                                            <p>Instr.: Philippe Lesage</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>De voksne kan være dæmoner i børnenes verden. Til tider i skræmmende bogstavelig forstand. Philippe Lesage...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-card trailer">
                    <div class="movie-card">
                        <div class="trailer-cover">
                            <div class="movie-card-playbutton">
                                <i class="fa fa-play" aria-hidden="true"></i>
                                <paper-ripple></paper-ripple>
                            </div>
                        </div>
                        <iframe id="pix-trailer" src="https://www.youtube.com/embed/VZgfEOxr53M?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="content-card newsletter-signup-cta">
                    <h3 class="newsletter-signup-cta-heading">Tilmeld dig vores nyhedsbrev</h3>
                    <p class="newsletter-signup-cta-subheading">Og få de seneste nyheder om hvilke film der spiller på <strong>CPH PIX</strong>.</p>
                    <form class="newsletter-signup">
                        <input type="email" class="newsletter-signup-text" placeholder="din@email.dk">
                        <span class="button newsletter-signup-button signup-to-newsletter">Tilmeld<paper-ripple></paper-ripple>
                        </span>
                    </form>
                </div>

                <div class="content-card slider-card">
                    <h2 class="content-card-extras-title no-margin">Kommende film</h2>
                    <div class="slider-items row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/18405a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>24 Weeks</h2>
                                            <p>Instr.: Anne Zohra Berrached</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Livet er godt hos standupperen Astrid. Hun har succes og gang i karrieren, et lækkert hus i forstaden, en sød kæreste-skråstreg-manager...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/17634a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>Det hvide folk</h2>
                                            <p>Instr.: Lisa Aschan</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Alex bliver samlet op foran en grønthandler og ført til et underjordisk fængsel for ubudne gæster, der skal deporteres fra Sverige...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/18453a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>The Demons</h2>
                                            <p>Instr.: Philippe Lesage</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>De voksne kan være dæmoner i børnenes verden. Til tider i skræmmende bogstavelig forstand. Philippe Lesage...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/18405a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>24 Weeks</h2>
                                            <p>Instr.: Anne Zohra Berrached</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Livet er godt hos standupperen Astrid. Hun har succes og gang i karrieren, et lækkert hus i forstaden, en sød kæreste-skråstreg-manager...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/17634a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>Det hvide folk</h2>
                                            <p>Instr.: Lisa Aschan</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Alex bliver samlet op foran en grønthandler og ført til et underjordisk fængsel for ubudne gæster, der skal deporteres fra Sverige...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/18453a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>The Demons</h2>
                                            <p>Instr.: Philippe Lesage</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>De voksne kan være dæmoner i børnenes verden. Til tider i skræmmende bogstavelig forstand. Philippe Lesage...</p>
                                        </div>
                                        <div class="movie-card-overlay"></div>
                                    </div>
                                    <paper-ripple></paper-ripple>
                                </a>
                                <div class="movie-card-buttons">
                                    <a href="#0" class="button">Køb Billet
                                        <paper-ripple></paper-ripple>
                                    </a>
                                    <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                                        <paper-ripple></paper-ripple>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-more row">
                        <div class="col-xs col-sm-6 col-sm-offset-3">
                            <a href="program.php" class="button">Se hele programmet
                                <paper-ripple></paper-ripple>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="content-card buster-section">
                    <div class="row middle-xs">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1 buster-section-image-container">
                            <img class="buster-section-image" src="<?php echo get_template_directory_uri(); ?>/images/buster_v3.png" alt="...">
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-5 col-md-offset-1">
                            <h3 class="buster-section-heading">Er du lærer?</h3>
                            <p class="buster-section-subheading">Så leder du måske efter BUSTERs program, undervisningsmaterialer m.m. Det kan du alt sammen finde på BUSTERs hjemmeside.</p>
                            <a href="#" class="buster-section-button button">Gå til BUSTERs hjemmeside</a>
                        </div> 
                    </div>  
                </div>
            </div>
        </div> 
    </div>
    
</div>

<?php get_footer(); ?>