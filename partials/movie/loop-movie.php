<?php 
    $director = get_post_meta( get_the_ID(), '_movie_director', true );
?>

<aside class="col-xs-12 col-sm-5 movie-sidebar">
    <div class="movie-card-container">
        <div class="movie-card" data-trailer="trailer">
            <?php the_post_thumbnail(); ?>
            <div class="movie-card-headline hidden-sm-up">
                <h2><?php the_title(); ?></h2>
                <?php 
                    if (isset($director) && !empty($director)) {
                        ?><p>Instr.: <?php echo $director; ?></p><?php
                    }
                ?>
            </div>
            <div class="movie-card-playbutton">
                <i class="fa fa-play" aria-hidden="true"></i>
            </div>
            <paper-ripple></paper-ripple>
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

    <h2 class="movie-sidebar-title">Spilletider</h2>
    <div class="movie-schedule">
        <?php for($i = 0; $i < 4; $i++) { ?>
        <a class="movie-schedule-entry" 
            data-schedule-add 
            data-schedule-venue="Grand Teatret" 
            data-schedule-date="Fre. 17/03" 
            data-schedule-time="19.15"
            data-schedule-movie="24 Weeks"
            data-schedule-image="18405a">
            <p class="movie-schedule-venue">Grand Teatret</p>
            <div class="movie-schedule-meta">
                <span class="movie-schedule-time">Fre. 17/03 - kl. 19.15</span>
                <span class="movie-schedule-buy">Tilføj til MyPIX Program</span>
            </div>
            <paper-ripple></paper-ripple>
        </a>
        <?php } ?>
    </div>

    <h2 class="movie-sidebar-title">Stemning</h2>
    <div class="movie-mood">
        <div class="row">
            <div class="col-xs-6">
                <span class="movie-mood-label">Tempo</span>
                <div class="movie-mood-bar" data-progress="45">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label">Thrills</span>
                <div class="movie-mood-bar" data-progress="40">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label">Sighs</span>
                <div class="movie-mood-bar" data-progress="100">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label">Laughs</span>
                <div class="movie-mood-bar" data-progress="80">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label">Look</span>
                <div class="movie-mood-bar" data-progress="70">
                    <div class="movie-mood-progress"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <span class="movie-mood-label">Food for thought</span>
                <div class="movie-mood-bar" data-progress="80">
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
                <iframe id="trailer-iframe" src="https://www.youtube.com/embed/FotoMsSvr8g?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
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
        <p><strong>Originaltitel</strong> 24 Wochen <strong>Titel</strong> 24 Weeks <strong>Land</strong> Tyskland <strong>Produktionsår</strong> 2016 <strong>Længde</strong> 102 min. <strong>Instruktør</strong> Anne Zohra Berrached <strong>Producer</strong> Johannes Jancke, Tobias Ebner, Melanie Berke <strong>Manuscript</strong> Anne Zohra Berrached, Carl Gerber <strong>Medvirkende</strong> Julia Jentsch, Bjarne Mädel, Johanna Gastdorf, Emilia Pieske, Maria Dragus <strong>Kamera</strong> Friede Clausz <strong>Lyd</strong> Marc Fragstein <strong>Klip</strong> Denys Darahan <strong>Musik</strong> Jasmin Reuter <strong>Produktion</strong> Zero One Film GmbH, Zweites Deutsches Fernsehen (ZDF), Filmakademie Baden-Württemberg <strong>Version</strong> Tysk tale med engelske undertekster</p>
    </footer>
</section>