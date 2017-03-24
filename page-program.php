<?php 
/* Template Name: Program */
?>
<?php get_header(); ?>

    <div class="container">
        <main class="row">
            <div class="col-xs">
                <div class="content-card program">

                    <form method="get" data-filter-form>
                        <div class="row program-header">
                            <div class="col-xs-12 col-sm-3">
                                <h1 class="content-card-title">Program</h1>
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <div class="program-search">
                                    <span class="program-search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    <input type="text" name="query" class="program-search-field" placeholder="Søg og tryk enter! (Virker ikke lige nu, brug filtre i stedet ->)" value="<?php if (isset($_GET['query'])) { echo $_GET['query']; } ?>">
                                    <span class="program-search-filter">
                                        Filter <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row program-filter">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 program-filter-days" data-dropdown>
                                        <h4 class="program-filter-subheading">Vælg dage<i class="fa fa-caret-down" aria-hidden="true"></i></h4>
                                        <div class="program-filter-dropdown double-width">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm">
                                                    <h5 class="program-filter-dropdown-heading">Uge 1</h5>
                                                    <label for="days-1-10" class="program-filter-group">
                                                        <input type="checkbox" name="days[]" value="1-10" id="days-1-10">
                                                        <span>1/10</span>
                                                    </label>
                                                    <label for="days-2-10" class="program-filter-group">
                                                        <input type="checkbox" name="days[]" value="2-10" id="days-2-10">
                                                        <span>2/10</span>
                                                    </label>
                                                </div>
                                                <div class="col-xs-12 col-sm">
                                                    <h5 class="program-filter-dropdown-heading">Uge 2</h5>
                                                    <label for="days-3-10" class="program-filter-group">
                                                        <input type="checkbox" name="days[]" value="3-10" id="days-3-10">
                                                        <span>3/10</span>
                                                    </label>
                                                    <label for="days-4-10" class="program-filter-group">
                                                        <input type="checkbox" name="days[]" value="4-10" id="days-4-10">
                                                        <span>4/10</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 program-filter-genre" data-dropdown>
                                        <h4 class="program-filter-subheading">Vælg genre<i class="fa fa-caret-down" aria-hidden="true"></i></h4>
                                        <div class="program-filter-dropdown">
                                            <label for="genre-action" class="program-filter-group">
                                                <input type="checkbox" name="genre[]" value="action" id="genre-action">
                                                <span>Action</span>
                                            </label>
                                            <label for="genre-animation" class="program-filter-group">
                                                <input type="checkbox" name="genre[]" value="animation" id="genre-animation">
                                                <span>Animation</span>
                                            </label>
                                            <label for="genre-drama" class="program-filter-group">
                                                <input type="checkbox" name="genre[]" value="drama" id="genre-drama">
                                                <span>Drama</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 program-filter-venue" data-dropdown>
                                        <h4 class="program-filter-subheading">Vælg venue<i class="fa fa-caret-down" aria-hidden="true"></i></h4>
                                        <div class="program-filter-dropdown">
                                            <label for="venue-imperial" class="program-filter-group">
                                                <input type="checkbox" name="venue[]" value="imperial" id="venue-imperial">
                                                <span>Imperial</span>
                                            </label>
                                            <label for="venue-dagmar" class="program-filter-group">
                                                <input type="checkbox" name="venue[]" value="dagmar" id="venue-dagmar">
                                                <span>Dagmar</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 program-filter-language" data-dropdown>
                                        <h4 class="program-filter-subheading">Vælg sprog<i class="fa fa-caret-down" aria-hidden="true"></i></h4>
                                        <div class="program-filter-dropdown">
                                            <label for="lang-danish" class="program-filter-group">
                                                <input type="checkbox" name="lang[]" value="danish" id="lang-danish">
                                                <span>Dansk</span>
                                            </label>
                                            <label for="lang-english" class="program-filter-group">
                                                <input type="checkbox" name="lang[]" value="english" id="lang-english">
                                                <span>Engelsk</span>
                                            </label>
                                            <label for="lang-german" class="program-filter-group">
                                                <input type="checkbox" name="lang[]" value="german" id="lang-german">
                                                <span>Tysk</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 program-filter-mood" data-dropdown>
                                        <h4 class="program-filter-subheading light">Vælg stemning<i class="fa fa-caret-down" aria-hidden="true"></i></h4>
                                        <div class="program-filter-dropdown">
                                            <label for="mood-tempo" class="program-filter-group">
                                                <input type="range" value="0" min="0" max="100" step="10" name="mood-tempo" id="mood-tempo">
                                                <span>Tempo</span>
                                            </label>
                                            <label for="mood-trills" class="program-filter-group">
                                                <input type="range" value="0" min="0" max="100" step="10" name="mood-thrills" id="mood-thrills">
                                                <span>Thrills</span>
                                            </label>
                                        </div>
                                    </div>

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
                                            <?php if($_REQUEST['festival'] == 'buster') { ?>
                                                <span>Du ser lige nu <strong>BUSTERs</strong> program. <a href="program.php">Skift til <strong>CPH PIX</strong></a>.</span></p>
                                            <?php } else { ?>
                                                <span>Du ser lige nu <strong>CPH PIX'</strong> program. <a href="program.php?festival=buster">Skift til BUSTER</a></span>.</p>
                                            <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class="button tiny inline program-filter-update" data-filter-submit>Opdater søgning
                                            <paper-ripple></paper-ripple>
                                        </span>
                                        <a class="button tiny inline transparent program-filter-reset" href="program.php" data-filter-reset>Nulstil filtre
                                            <paper-ripple></paper-ripple>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row program-list">
                        <div class="col-xs-12 col-sm-6 col-md-4 program-list-item"
                             data-subtitles="true"
                             data-language="german"
                             data-genre="drama"
                             data-venue="imperial"
                             data-days="1-10 2-10">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="images/movies/thumbs/18405a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>24 Weeks</h2>
                                            <p>Instr.: Anne Zohra Berrached</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Livet er godt hos standupperen Astrid. Hun har succes og gang i karrieren, et lækkert hus i forstaden, en sød kæreste-skråstreg-manager...</p>
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
                        <div class="col-xs-12 col-sm-6 col-md-4 program-list-item"
                             data-subtitles="true"
                             data-language="svensk"
                             data-genre="drama"
                             data-venue="dagmar"
                             data-days="2-10 4-10">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="images/movies/thumbs/17634a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>Det hvide folk</h2>
                                            <p>Instr.: Lisa Aschan</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Alex bliver samlet op foran en grønthandler og ført til et underjordisk fængsel for ubudne gæster, der skal deporteres fra Sverige.</p>
                                            <div class="movie-card-meta">
                                                <span>Instruktør: Lisa Aschan</span>
                                                <span>År: 2015</span>
                                                <span>Land: Sverige, Danmark, Finland</span>
                                                <span>Original Titel: Det Vita Folket</span>
                                                <span>Producer: Anna-Maria Kantarius</span>
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
                        <div class="col-xs-12 col-sm-6 col-md-4 program-list-item"
                             data-subtitles="true"
                             data-language="canada"
                             data-genre="drama"
                             data-venue="dagmar"
                             data-days="3-10 4-10">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="images/movies/thumbs/18453a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>The Demons</h2>
                                            <p>Instr.: Philippe Lesage</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>De voksne kan være dæmoner i børnenes verden. Til tider i skræmmende bogstavelig forstand. Philippe Lesage...</p>
                                            <div class="movie-card-meta">
                                                <span>Instruktør: Philippe Lesage</span>
                                                <span>År: 2015</span>
                                                <span>Land: Canada</span>
                                                <span>Original Titel: Les Demons</span>
                                                <span>Producer: Galilé Marion-Gauvin, Philippe Lesage</span>
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
                    </div> 

                </div>
            </div>
            
        </main> 
    </div>

<?php get_footer(); ?>