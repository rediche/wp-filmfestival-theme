<?php 
/* Template Name: Program */
?>
<?php get_header(); ?>

    <div class="container">
        <main class="row">
            <div class="col-xs">
                <div class="content-card program">

                    <?php get_template_part( 'partials/program/form', 'filters'); ?>

                    <div class="row program-list">
                        <?php
                            $args = array( 'post_type' => 'movie', 'posts_per_page' => 3 );
                            $selectedMoviesLoop = new WP_Query( $args );
                            while ( $selectedMoviesLoop->have_posts() ) : $selectedMoviesLoop->the_post();
                                get_template_part( 'partials/program/loop', 'movie' );
                            endwhile;
                        ?>

                        <!--<div class="col-xs-12 col-sm-6 col-md-4 program-list-item"
                             data-subtitles="true"
                             data-language="svensk"
                             data-genre="drama"
                             data-venue="dagmar"
                             data-days="2-10 4-10">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="images/movies/thumbs/17634a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>Det hvide folk</h2>
                                            <p>Instr.: Lisa Aschan</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Alex bliver samlet op foran en grønthandler og ført til et underjordisk fængsel for ubudne gæster, der skal deporteres fra Sverige.</p>
                                            <div class="movie-card-meta">
                                                <span>Instruktør: Lisa Aschan</span>
                                                <span>År: 2015</span>
                                                <span>Land: Sverige, Danmark, Finland</span>
                                                <span>Original Titel: Det Vita Folket</span>
                                                <span>Producer: Anna-Maria Kantarius</span>
                                            </div>
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
                        <div class="col-xs-12 col-sm-6 col-md-4 program-list-item"
                             data-subtitles="true"
                             data-language="canada"
                             data-genre="drama"
                             data-venue="dagmar"
                             data-days="3-10 4-10">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="images/movies/thumbs/18453a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>The Demons</h2>
                                            <p>Instr.: Philippe Lesage</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>De voksne kan være dæmoner i børnenes verden. Til tider i skræmmende bogstavelig forstand. Philippe Lesage...</p>
                                            <div class="movie-card-meta">
                                                <span>Instruktør: Philippe Lesage</span>
                                                <span>År: 2015</span>
                                                <span>Land: Canada</span>
                                                <span>Original Titel: Les Demons</span>
                                                <span>Producer: Galilé Marion-Gauvin, Philippe Lesage</span>
                                            </div>
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
                        </div>-->
                    </div> 

                </div>
            </div>
            
        </main> 
    </div>

<?php get_footer(); ?>