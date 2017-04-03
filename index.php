<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <h1 class="content-card-title"><?php the_title(); ?></h1>
                    </div>
                    <div class="col-xs-12">
                        <div class="post-image"
                            <?php if (has_post_thumbnail()) { ?>
                            style="background-image:url('<?php the_post_thumbnail_url('large'); ?>');"
                            <?php } ?>>
                            <div class="row bottom-xs">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                    <div class="post-image-date">Skrevet d. <?php the_date(); ?></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <div class="post-content"><?php the_content(); ?></div>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <div class="row">
                    <div class="col-xs">
            	        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    </div>
                </div>
            <?php endif; ?>
            </div>
        </div> 
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="content-card-extras-title">Andre nyheder</h3>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <?php
                            $args = array( 
                                'post_type' => 'post', 
                                'posts_per_page' => 3,
                                'orderby' => 'rand'
                            );
                            $selectedNewsLoop = new WP_Query( $args );
                            while ( $selectedNewsLoop->have_posts() ) : $selectedNewsLoop->the_post(); ?>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="post-card">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="post-card-image"
                                                 <?php if (has_post_thumbnail()) { ?>
                                                     style="background-image:url('<?php the_post_thumbnail_url('large'); ?>');"
                                                 <?php } ?>>
                                                <h2 class="post-card-title"><?php the_title(); ?></h2>
                                            </div>
                                            <div class="post-card-body">
                                                <p><?php echo substr(wp_strip_all_tags(get_the_content()), 0, 225) . '...'; ?></p>
                                            </div>
                                        </a>
                                        <paper-ripple></paper-ripple>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                            <?php for($i = 0; $i < 3; $i++) { ?>
                            
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>