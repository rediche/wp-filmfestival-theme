<?php // data-filter-form igangsætter vores JavaScript ?>
<form method="get" data-filter-form>
    <div class="row program-header">
        <div class="col-xs-12 col-sm-3">
            <h1 class="content-card-title">Program</h1>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="program-search">
                <span class="program-search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>

                <?php // Hvis ?query= er sat i URL'en, så indsæt den i søgefeltet ?>
                <input type="text" name="query" class="program-search-field" placeholder="Søg og tryk enter!" value="<?php if (isset($_GET['query'])) { echo $_GET['query']; } ?>">
                <span class="program-search-filter">
                    Filtre <i class="fa fa-caret-up" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>

    
    <div class="row program-filter">
        <div class="col-xs-12">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-4 program-filter-genre" data-dropdown>
                    <h4 class="program-filter-subheading">Vælg genre<i class="fa fa-caret-down" aria-hidden="true"></i></h4>
                    <div class="program-filter-dropdown">
                        <?php 
                            // Hent alle genrer fra WP-admin,
                            // der har film tilknyttet
                            $genres = get_terms( array(
                                'taxonomy' => 'genre',
                                'hide_empty' => true
                            ) );
                        ?>
                        <?php 
                            // For hvert enkel genre, 
                            //lav en checkbox med de rigtige informationer 
                        ?>
                        <?php foreach($genres as $genre) : ?>
                            <label for="genre-<?php echo $genre->slug; ?>" class="program-filter-group">
                                <input type="checkbox" name="genre[]" value="<?php echo strtolower($genre->name); ?>" id="genre-<?php echo $genre->slug; ?>">
                                <span><?php echo $genre->name; ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php // Kig på genre for at se hvordan denne kode fungerer ?>
                <div class="col-xs-12 col-sm-6 col-md-4 program-filter-venue" data-dropdown>
                    <h4 class="program-filter-subheading">Vælg venue<i class="fa fa-caret-down" aria-hidden="true"></i></h4>
                    <div class="program-filter-dropdown">
                        <?php 
                            $venues = get_terms( array(
                                'taxonomy' => 'venue',
                                'hide_empty' => true
                            ) );
                        ?>
                        <?php foreach($venues as $venue) : ?>
                            <label for="venue-<?php echo $venue->slug; ?>" class="program-filter-group">
                                <input type="checkbox" name="venue[]" value="<?php echo strtolower($venue->name); ?>" id="venue-<?php echo $venue->slug; ?>">
                                <span><?php echo $venue->name; ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php // Kig på genre for at se hvordan denne kode fungerer ?>
                <div class="col-xs-12 col-sm-6 col-md-4 program-filter-language" data-dropdown>
                    <h4 class="program-filter-subheading">Vælg sprog<i class="fa fa-caret-down" aria-hidden="true"></i></h4>
                    <div class="program-filter-dropdown">
                        <?php 
                            $languages = get_terms( array(
                                'taxonomy' => 'language',
                                'hide_empty' => true
                            ) );
                        ?>
                        <?php foreach($languages as $lang) : ?>
                            <label for="lang-<?php echo $lang->slug; ?>" class="program-filter-group">
                                <input type="checkbox" name="lang[]" value="<?php echo strtolower($lang->name); ?>" id="lang-<?php echo $lang->slug; ?>">
                                <span><?php echo $lang->name; ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php // Slå undertekster til og fra ?>
                <div class="col-xs-12 col-sm-6 col-md-4 program-filter-subtitles">
                    <label for="subtitles" class="program-filter-group">
                        <input type="checkbox" 
                                id="subtitles" 
                                name="subtitles" 
                                value="true">
                        <span>Undertekster</span>
                    </label>
                </div>
            </div>
            <div class="row center-xs end-sm program-filter-buttons">
                <div class="col-xs-12 col-sm-6">
                    <p class="program-filter-whichprogram">
                        <?php
                            // Hvis der står ?festival=buster i URL'en
                            // skriv at man kan skifte til CPH PIX program
                            // og den anden vej, hvis der ikke står ?festival=buster i URL'en
                        ?>
                        <?php if (isset($_GET['festival']) && $_GET['festival'] == 'buster') { ?>
                            <span>Du ser lige nu <strong>BUSTERs</strong> program. <a href="<?php the_permalink(); ?>">Skift til <strong>CPH PIX</strong></a>.</span></p>
                        <?php } else { ?>
                            <span>Du ser lige nu <strong>CPH PIX'</strong> program. <a href="<?php the_permalink(); ?>?festival=buster">Skift til BUSTER</a></span>.</p>
                        <?php } ?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <span class="button tiny inline program-filter-update" data-filter-submit>Opdater søgning
                        <paper-ripple></paper-ripple>
                    </span>
                    <a class="button tiny inline transparent program-filter-reset" href="<?php the_permalink(); ?>" data-filter-reset>Nulstil søgning
                        <paper-ripple></paper-ripple>
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>
