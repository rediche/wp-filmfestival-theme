<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
                <h1 class="content-card-title"><?php the_title(); ?></h1>
                <?php echo term_description(); ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card slider-card">
                <div class="slide-items row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php // Hent templaten i filen: partials/frontpage/loop-movie.php ?>
                        <?php get_template_part( 'partials/frontpage/loop', 'movie' ); ?>
                    <?php endwhile; endif; ?>
                </div> 
            </div>
        </div> 
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
                <div class="row center-xs">
                    <div class="col-xs col-sm-6">
                        <a href="<?php the_permalink( get_page_by_path( 'serier' ) ) ?>" class="button content-card-button">Se alle serier
                            <paper-ripple></paper-ripple>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>