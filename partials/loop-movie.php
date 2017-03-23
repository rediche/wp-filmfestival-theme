<div class="col-xs-12 col-sm-6 col-md-4">
    <div class="movie-card-container">
        <a href="<?php get_permalink(); ?>">
            <div class="movie-card animated">
                <img src="<?php echo get_template_directory_uri(); ?>/images/movies/thumbs/18405a_thumb.jpg" alt="...">
                <div class="movie-card-headline">
                    <h2><?php the_title(); ?></h2>
                    <p>Instr.: Anne Zohra Berrached</p>
                </div>
                <div class="movie-card-content">
                    <p><?php echo substr(get_the_content(), 0, 200) . '...'; ?></p>
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

