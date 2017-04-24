<?php
    // Hent film metadata fra WP-admin
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

    // Hent alle genre navne for filmen
    // Og adskil dem med mellemrum
    $genre = '';
    foreach(wp_get_post_terms( get_the_ID(), 'genre') as $tempGenre) :
        $genre .= strtolower($tempGenre->name).' ';
    endforeach;

    // Hent alle venues for filmen
    // Og adskil dem med mellemrum
    $venue = '';
    foreach(wp_get_post_terms( get_the_ID(), 'venue') as $tempVenue) :
        $venue .= strtolower($tempVenue->name).' ';
    endforeach;

    // Hent alle sprog for filmen
    // Og adskil dem med mellemrum
    $language = '';
    foreach(wp_get_post_terms( get_the_ID(), 'language') as $tempLang) :
        $language .= strtolower($tempLang->name).' ';
    endforeach;

    // Tilføj alle metadata til en lang sætning,
    // Adskilt af mellemrum
    $movieMeta = '';
    $movieMeta .= $original_title.' ';
    $movieMeta .= $title.' ';
    $movieMeta .= $country.' ';
    $movieMeta .= $year.' ';
    $movieMeta .= $duration.' ';
    $movieMeta .= $producer.' ';
    $movieMeta .= $manuscript.' ';
    $movieMeta .= $actors.' ';
    $movieMeta .= $camera.' ';
    $movieMeta .= $editing.' ';
    $movieMeta .= $sound.' ';
    $movieMeta .= $music.' ';
    $movieMeta .= $production.' ';
    $movieMeta .= $version.' ';
    $movieMeta .= $subtitlelang.' ';
    $movieMeta .= get_the_title().' ';
    $movieMeta .= $genre.' ';
    $movieMeta .= $venue.' ';
    $movieMeta .= $language.' ';
?>

<div class="col-xs-12 col-sm-6 col-md-4 program-list-item"
     data-movie-search-show="true"
     data-movie-filter-show="true"
     <?php
        // Hvis $movieMeta er sat
        // Udskriv sætningen med alle metadata navne
        // Vi bruger dette i JavaScript til at søge efter film
     ?>
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
            if (isset($language) && !empty($language)) {
                echo 'data-language="' . strtolower($language) . '"';
            }
        ?>
        <?php
            if (isset($genre) && !empty($genre)) {
                echo 'data-genre="' . strtolower($genre) . '"';
            }
        ?>
        <?php
            if (isset($venue) && !empty($venue)) {
                echo 'data-venue="' . strtolower($venue) . '"';
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