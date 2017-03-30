<?php
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="content-card-title"><?php single_post_title(); ?></h1>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="post-card">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="post-card-image">
                                                <h2 class="post-card-title"><?php the_title(); ?></h2>
                                            </div>
                                            <div class="post-card-body">
                                                <p><?php echo substr(wp_strip_all_tags(get_the_content()), 0, 225) . '...'; ?></p>
                                            </div>
                                        </a>
                                        <paper-ripple></paper-ripple>
                                    </div>
                                </div>
                            <?php endwhile; else : ?>
                                <div class="col-xs">
                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>