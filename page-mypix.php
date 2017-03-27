<?php 
/* Template Name: MyPIX */
?>
<?php get_header(); ?>

<div class="mypix">
    <div class="container">
        <div class="row">
            <div class="col-xs">
                <div class="content-card">
                    <h1 class="content-card-title"><?php the_title(); ?></h1>
                    <h2 class="content-card-extras-title">Mit program</h2>
                    <div class="movie-schedule" data-ticket-list></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs">
                <div class="content-card">
                    <h2 class="content-card-extras-title">Min filmliste</h2>
                    <div class="slider-items row" data-mypix-list></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>