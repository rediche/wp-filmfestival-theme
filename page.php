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
                    <!--<div class="col-xs-12">
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
                    </div>-->
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

<?php get_footer(); ?>