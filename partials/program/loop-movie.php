<?php
    $original_title = get_post_meta( get_the_ID(), '_movie_original_title', true );
    $title          = get_post_meta( get_the_ID(), '_movie_title', true );
    $country        = get_post_meta( get_the_ID(), '_movie_country', true );
    $year           = get_post_meta( get_the_ID(), '_movie_year', true );
    $duration       = get_post_meta( get_the_ID(), '_movie_duration', true );
    $director       = get_post_meta( get_the_ID(), '_movie_director', true );
    $producer       = get_post_meta( get_the_ID(), '_movie_producer', true );
    $manuscript     = get_post_meta( get_the_ID(), '_movie_manuscript', true );
    $actors         = get_post_meta( get_the_ID(), '_movie_actors', true );
    $camera         = get_post_meta( get_the_ID(), '_movie_camera', true );
    $editing        = get_post_meta( get_the_ID(), '_movie_editing', true );
    $sound          = get_post_meta( get_the_ID(), '_movie_sound', true );
    $music          = get_post_meta( get_the_ID(), '_movie_music', true );
    $production     = get_post_meta( get_the_ID(), '_movie_production', true );
    $version        = get_post_meta( get_the_ID(), '_movie_version', true );
    $subtitles      = get_post_meta( get_the_ID(), '_movie_subtitles', true );
    $subtitlelang   = get_post_meta( get_the_ID(), '_movie_subtitlelang', true );

    $movieMeta = $original_title.' '.$title.' '.$country.' '.$year.' '.$duration.' '.$producer.' '.$manuscript.' '.$actors.' '.$camera.' '.$editing.' '.$sound.' '.$music.' '.$production.' '.$version.' '.$subtitlelang.' '.get_the_title();
?>

<div class="col-xs-12 col-sm-6 col-md-4 program-list-item"
     data-movie-search-show="true"
     data-movie-filter-show="true"
     data-movie-meta="<?php if (isset($movieMeta) && !empty($movieMeta)) { echo $movieMeta; } ?>"
        <?php 
            if (isset($subtitles) && !empty($subtitles)) {
                if ($subtitles == 'yes') {
                    echo 'data-subtitles="true"';
                } else {
                    echo 'data-subtitles="false"';
                }
            }
        ?>
        <?php
            if (isset($version) && !empty($version)) {
                echo 'data-language="' . strtolower($version) . '"';
            }
        ?>
        <?php
            if (isset($genre) && !empty($genre)) {
                echo 'data-genre="' . strtolower($genre) . '"';
            }
        ?>
        <?php // TODO: how to venue? ?>
        <?php // TODO: how to days? ?>>
    <div class="movie-card-container">
        <a href="<?php the_permalink(); ?>">
            <div class="movie-card animated">
                <?php the_post_thumbnail('large'); ?>
                <div class="movie-card-headline">
                    <h2><?php the_title(); ?></h2>
                    <?php 
                        if (isset($director) && !empty($director)) {
                            ?><p>Instr.: <?php echo $director; ?></p><?php
                        }
                    ?>
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