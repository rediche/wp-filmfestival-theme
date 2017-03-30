<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="content-card-title"><?php the_title(); ?></h1>
                    </div>
                    <div class="col-xs-12">
                        <div class="post-image"
                             <?php if (has_post_thumbnail()) { ?>
                                style="background-image:url('<?php the_post_thumbnail_url('large'); ?>');"
                             <?php } ?>></div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <?php the_content(); ?>
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
                            <?php for($i = 0; $i < 3; $i++) { ?>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="post-card">
                                    <a href="post.php">
                                        <div class="post-card-image">
                                            <h2 class="post-card-title">Vi søger en outreach-koordinator (løntilskud)</h2>
                                        </div>
                                        <div class="post-card-body">
                                            <p>Vil du være med til at tilrettelægge og opbygge et nyt og stærkt kontaktlærernetværk for skoleprogrammet på Danmarks største spillefilmfestival?</p>
                                        </div>
                                    </a>
                                    <paper-ripple></paper-ripple>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>