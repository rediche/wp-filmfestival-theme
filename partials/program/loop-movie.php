<div class="col-xs-12 col-sm-6 col-md-4 program-list-item"
        data-subtitles="true"
        data-language="german"
        data-genre="drama"
        data-venue="imperial"
        data-days="1-10 2-10">
    <div class="movie-card-container">
        <a href="<?php the_permalink(); ?>">
            <div class="movie-card animated">
                <?php the_post_thumbnail(); ?>
                <div class="movie-card-headline">
                    <h2><?php the_title(); ?></h2>
                    <p>Instr.: Anne Zohra Berrached</p>
                </div>
                <div class="movie-card-content">
                    <p><?php echo substr(get_the_content(), 0, 200) . '...'; ?></p>
                    <div class="movie-card-meta">
                        <span>Instruktør: Anne Zohra Berrached</span>
                        <span>År: 2016</span>
                        <span>Land: Tyskland</span>
                        <span>Original Titel: 24 Wochen</span>
                        <span>Producer: Johannes Jancke, Tobias Ebner, Melanie Berke</span>
                    </div>
                </div>
                <div class="movie-card-overlay"></div>
            </div>
            <paper-ripple></paper-ripple>
        </a>
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