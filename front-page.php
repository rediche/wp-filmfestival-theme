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
                        <?php
                            $args = array( 'post_type' => 'movie', 'posts_per_page' => 3 );
                            $selectedMoviesLoop = new WP_Query( $args );
                            while ( $selectedMoviesLoop->have_posts() ) : $selectedMoviesLoop->the_post();
                                get_template_part( 'partials/frontpage/loop', 'movie' );
                            endwhile;
                        ?>
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
                        <?php
                            $args = array( 'post_type' => 'movie', 'posts_per_page' => 6 );
                            $selectedMoviesLoop = new WP_Query( $args );
                            while ( $selectedMoviesLoop->have_posts() ) : $selectedMoviesLoop->the_post();
                                get_template_part( 'partials/frontpage/loop', 'movie' );
                            endwhile;
                        ?>
                    </div>
                    <div class="slider-more row">
                        <div class="col-xs col-sm-6 col-sm-offset-3">
                            <?php // TODO: Make link dynamic. Maybe taking first page with template Program? ?>
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