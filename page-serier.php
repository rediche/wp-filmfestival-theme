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
                    'taxonomy' => 'series',
                    'hide_empty' => true
                ) );
            ?>

            <?php foreach($series as $collection) : ?>
                <div class="content-card slider-card" id="<?php echo $collection->slug; ?>">
                    <h2 class="content-card-extras-title no-margin"><?php echo $collection->name; ?></h2>
                    <?php if (!empty($collection->description) ) : ?>
                        <p class="content-card-subtitle"><?php echo $collection->description; ?></p>
                    <?php endif; ?>
                    <div class="slide-items row">
                        <?php
                            $args = array( 
                                'post_type' => 'movie',
                                'posts_per_page' => 3,
                                'tax_query' => array( 
                                    array(
                                        'taxonomy' => 'series',
                                        'field' => 'slug',
                                        'terms' => $collection->slug
                                    )
                                )
                            );

                            $seriesMovieLoop = new WP_Query( $args );
                            while ( $seriesMovieLoop->have_posts() ) : $seriesMovieLoop->the_post();
                                get_template_part( 'partials/frontpage/loop', 'movie' );
                            endwhile;
                        ?>
                    </div>
                </div>
                
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>