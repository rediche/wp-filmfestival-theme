<?php
/* Template Name: Serier */
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="content-card">
                <h1 class="content-card-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>

            <?php 
                $series = get_terms( array(
                    'taxonomy' => 'series', // Hent serier
                    'hide_empty' => true // Skjul dem der ikke har film tilknyttet
                ) );
            ?>

            <?php // For hver serie ?>
            <?php foreach($series as $collection) : ?>
                <div class="content-card slider-card" id="<?php echo $collection->slug; ?>">
                    <h2 class="content-card-extras-title no-margin"><?php echo $collection->name; ?></h2>
                    <?php if (!empty($collection->description) ) : ?>
                        <p class="content-card-subtitle"><?php echo $collection->description; ?></p>
                    <?php endif; ?>
                    <div class="slide-items row">
                        <?php
                            $args = array( 
                                'post_type' => 'movie', // Post type: Film
                                'posts_per_page' => 3, // Max 3 film
                                'tax_query' => array( 
                                    array(
                                        'taxonomy' => 'series', // Der er i en serie
                                        'field' => 'slug',  // Hvor seriens URL matcher
                                        'terms' => $collection->slug // Seriens navn
                                    )
                                )
                            );

                            $seriesMovieLoop = new WP_Query( $args );
                            while ( $seriesMovieLoop->have_posts() ) : $seriesMovieLoop->the_post();
                                // Brug templaten i filen: partials/frontpage/loop-movie.php
                                get_template_part( 'partials/frontpage/loop', 'movie' );
                            endwhile;
                        ?>
                    </div>
                    <div class="row center-xs">
                        <div class="col-xs col-sm-6">
                            <?php // Link til seriesiden ?>
                            <a href="<?php echo get_term_link($collection->term_id) ?>" class="button content-card-button">Se hele serien
                                <paper-ripple></paper-ripple>
                            </a>
                        </div>
                    </div>
                    
                </div>
                
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>