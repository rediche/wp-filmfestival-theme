<div class="col-xs-12 col-sm-6 col-md-4">
    <div class="movie-card-container">
        <a href="<?php the_permalink(); ?>">
            <div class="movie-card animated">
                <?php the_post_thumbnail('large'); ?>
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
            <a href="#0" class="button black add-to-mypix"
                data-movie-id="<?php the_ID(); ?>"
                data-movie-title="<?php the_title(); ?>"
                data-movie-permalink="<?php the_permalink(); ?>"
                data-movie-image="<?php the_post_thumbnail_url('large'); ?>"
                data-movie-content="<?php echo substr(get_the_content(), 0, 200) . '...'; ?>"
                data-movie-director="<?php echo get_post_meta( get_the_ID(), '_movie_director', true ); ?>">Føj til MyPIX
                <paper-ripple></paper-ripple>
            </a>
        </div>
    </div>
</div>

