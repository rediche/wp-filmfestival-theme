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
?>

<aside class="col-xs-12 col-sm-5 movie-sidebar">
    <div class="movie-card-container">
        <div class="movie-card" <?php echo (isset($trailer) && !empty($trailer) ? 'data-trailer="trailer"' : ''); ?>>
            <?php the_post_thumbnail('large'); ?>
            <div class="movie-card-headline hidden-sm-up">
                <h2><?php the_title(); ?></h2>
                <?php 
                    if (isset($director) && !empty($director)) {
                        ?><p>Instr.: <?php echo $director; ?></p><?php
                    }
                ?>
            </div>
            <?php if (isset($trailer) && !empty($trailer)) { ?>
                <div class="movie-card-playbutton">
                    <i class="fa fa-play" aria-hidden="true"></i>
                </div>
                <paper-ripple></paper-ripple>
            <?php } ?>
        </div>
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

    <?php 
        $schedule = get_the_terms( get_the_ID(), 'venue' );
        //var_dump($schedule);

        if ($schedule) :
    ?>
        <h2 class="movie-sidebar-title">Spilletider</h2>
        <div class="movie-schedule">
            <?php foreach($schedule as $playtime) : ?>
            <?php 
                $randomDate = mt_rand(1506556800, 1507766399);
                $showDate = date("d/m/y", $randomDate);
                $showTime = date("H.i",$randomDate);
            ?>
            <a class="movie-schedule-entry" 
                data-schedule-add 
                data-schedule-venue="<?php echo $playtime->name; ?>" 
                data-schedule-date="<?php echo $showDate; ?>" 
                data-schedule-time="<?php echo $showTime; ?>"
                data-schedule-movie="<?php the_title(); ?>"
                data-schedule-image="<?php the_post_thumbnail_url( 'large' ); ?>">
                <p class="movie-schedule-venue"><?php echo $playtime->name; ?></p>
                <div class="movie-schedule-meta">
                    <span class="movie-schedule-time"><?php echo $showDate; ?> - kl. <?php echo $showTime; ?></span>
                    <span class="movie-schedule-buy">Tilføj til MyPIX Program</span>
                </div>
                <paper-ripple></paper-ripple>
            </a>
            <?php endforeach; ?>
        </div>
    <?php
        endif;
    ?>

    <?php
    /**
     * Get Mood Metadata
     */ 

    $tempo          = get_post_meta( get_the_ID(), '_mood_tempo', true );
    $thrills        = get_post_meta( get_the_ID(), '_mood_thrills', true );
    $sighs          = get_post_meta( get_the_ID(), '_mood_sighs', true );
    $laughs         = get_post_meta( get_the_ID(), '_mood_laughs', true );
    $look           = get_post_meta( get_the_ID(), '_mood_look', true );
    $foodforthought = get_post_meta( get_the_ID(), '_mood_foodforthought', true );
    ?>

    <h2 class="movie-sidebar-title">Stemning</h2>
    <div class="movie-mood">
        <div class="row">
            <div class="col-xs-6">
                <span class="movie-mood-label"><?php _e( 'Tempo', 'cphpix' ); ?></span>
                <div class="movie-mood-bar" data-progress="<?php echo (isset($tempo) ? $tempo : '0'); ?>">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label"><?php _e( 'Thrills', 'cphpix' ); ?></span>
                <div class="movie-mood-bar" data-progress="<?php echo (isset($thrills) ? $thrills : '0'); ?>">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label"><?php _e( 'Sighs', 'cphpix' ); ?></span>
                <div class="movie-mood-bar" data-progress="<?php echo (isset($sighs) ? $sighs : '0'); ?>">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label"><?php _e( 'Laughs', 'cphpix' ); ?></span>
                <div class="movie-mood-bar" data-progress="<?php echo (isset($laughs) ? $laughs : '0'); ?>">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label"><?php _e( 'Look', 'cphpix' ); ?></span>
                <div class="movie-mood-bar" data-progress="<?php echo (isset($look) ? $look : '0'); ?>">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label"><?php _e( 'Food for thought', 'cphpix' ); ?></span>
                <div class="movie-mood-bar" data-progress="<?php echo (isset($foodforthought) ? $foodforthought : '0'); ?>">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
        </div>
    </div>
</aside>

<div id="trailer" class="trailer-overlay">
    <div class="trailer-overlay-content">
        <div class="movie-card-container">
            <div class="movie-card">
                <iframe id="trailer-iframe" src="https://www.youtube.com/embed/<?php echo (isset($trailer) && !empty($trailer) ? $trailer : ''); ?>?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="movie-card-buttons">
                <a href="#0" class="button">Køb Billet
                    <paper-ripple></paper-ripple>
                </a>
                <a href="#0" class="button black add-to-mypix">Tilføj til MyPIX
                    <paper-ripple></paper-ripple>
                </a>
            </div>
        </div>
    </div>
</div>

<section class="col-xs-12 col-sm-7 movie-description">
    <header class="movie-description-header hidden-xs">
        <h1 class="movie-description-title"><?php the_title(); ?></h1>
        <?php 
            if (isset($director) && !empty($director)) {
                ?><p class="movie-description-byline">Instr.: <?php echo $director; ?></p><?php
            }
        ?>
    </header>

    <?php the_content(); ?>
    
    <footer class="movie-description-footer">
        <p>
            <?php if (isset($original_title) && !empty($original_title)) {
                echo '<strong>Originaltitel</strong> '. $original_title;
            } ?>
            <?php if (isset($title) && !empty($title)) {
                echo '<strong>Titel</strong> '. $title;
            } ?>
            <?php if (isset($country) && !empty($country)) {
                echo '<strong>Land</strong> '. $country;
            } ?>
            <?php if (isset($year) && !empty($year)) {
                echo '<strong>Produktionsår</strong> '. $year;
            } ?>
            <?php if (isset($duration) && !empty($duration)) {
                echo '<strong>Længde</strong> '. $duration .' min.';
            } ?>
            <?php if (isset($director) && !empty($director)) {
                echo '<strong>Instruktør</strong> '. $director;
            } ?>
            <?php if (isset($producer) && !empty($producer)) {
                echo '<strong>Producer</strong> '. $producer;
            } ?>
            <?php if (isset($manuscript) && !empty($manuscript)) {
                echo '<strong>Manuskript</strong> '. $manuscript;
            } ?>
            <?php if (isset($actors) && !empty($actors)) {
                echo '<strong>Medvirkende</strong> '. $actors;
            } ?>
            <?php if (isset($camera) && !empty($camera)) {
                echo '<strong>Kamera</strong> '. $camera;
            } ?>
            <?php if (isset($sound) && !empty($sound)) {
                echo '<strong>Lyd</strong> '. $sound;
            } ?>
            <?php if (isset($editing) && !empty($editing)) {
                echo '<strong>Klip</strong> '. $editing;
            } ?>
            <?php if (isset($music) && !empty($music)) {
                echo '<strong>Musik</strong> '. $music;
            } ?>
            <?php if (isset($production) && !empty($production)) {
                echo '<strong>Produktion</strong> '. $production;
            } ?>
            <?php if (isset($subtitles) && !empty($subtitles) && isset($subtitlelang) && !empty($subtitlelang)) {
                echo '<strong>Undertekster</strong> på '. $subtitlelang;
            } ?>
        </p>
    </footer>
</section>