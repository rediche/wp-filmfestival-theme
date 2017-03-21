<?php include('header.php'); ?>

    <div class="container">
        <main class="row">
            <div class="col-xs">
                <div class="content-card">
                    <div class="row">
                        <aside class="col-xs-12 col-sm-5 movie-sidebar">
                            <div class="movie-card-container">
                                <div class="movie-card" data-trailer="trailer">
                                    <img src="images/movies/thumbs/18405a_thumb.jpg" alt="...">
                                    <div class="movie-card-headline hidden-sm-up">
                                        <h2>24 Weeks</h2>
                                        <p>Instr.: Anne Zohra Berrached</p>
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
                                <h1 class="movie-description-title">24 Weeks</h1>
                                <p class="movie-description-byline">Instr.: Anne Zohra Berrached</p>
                            </header>

                            <p>Livet er godt hos standupperen Astrid. Hun har succes og gang i karrieren, et lækkert hus i forstaden, en sød kæreste-skråstreg-manager, en dejlig datter og en 24-uger gammel baby i sin højgravide mave. Men så fortæller lægen hende, at hendes baby med al sandsynlighed vil blive født med Downs syndrom. Og knap er det sunket ind, før lægerne fortæller hende, at barnet også har en alvorlig hjertefejl. Og pludselig er livet ikke så helvedes sjovt. Selvom Astrid og hendes kæreste prøver at takle det med en god portion sort humor, så melder der sig en en stak alvorstunge spørgsmål om liv og død. For er det ansvarligt at sætte et barn i verden, der vil være både psykisk og fysisk handicappet? Tvivl bliver til splid, og snart må Astrid se sit livs værste mareridt i øjnene - skal hun beholde sit barn eller ej? '24 Weeks' dykker hovedkuls ned i et brændvarmt, følelsesladet og sprængfarligt emne. Sammen med sølvbjørnevinderen Julia Jensch ('Sophie Sholl') i den altoverskyggende hovedrolle som Astrid, tegner instruktør Anna Zohra Berrached et stærkt portræt af en kvinde, der står over for et valg, hvor der ikke er nogen nemme løsninger. Og byder desuden på de vistnok første og foreløbigt eneste high-definition optagelser direkte fra en livmoder.</p>
                            
                            <footer class="movie-description-footer">
                                <p><strong>Originaltitel</strong> 24 Wochen <strong>Titel</strong> 24 Weeks <strong>Land</strong> Tyskland <strong>Produktionsår</strong> 2016 <strong>Længde</strong> 102 min. <strong>Instruktør</strong> Anne Zohra Berrached <strong>Producer</strong> Johannes Jancke, Tobias Ebner, Melanie Berke <strong>Manuscript</strong> Anne Zohra Berrached, Carl Gerber <strong>Medvirkende</strong> Julia Jentsch, Bjarne Mädel, Johanna Gastdorf, Emilia Pieske, Maria Dragus <strong>Kamera</strong> Friede Clausz <strong>Lyd</strong> Marc Fragstein <strong>Klip</strong> Denys Darahan <strong>Musik</strong> Jasmin Reuter <strong>Produktion</strong> Zero One Film GmbH, Zweites Deutsches Fernsehen (ZDF), Filmakademie Baden-Württemberg <strong>Version</strong> Tysk tale med engelske undertekster</p>
                            </footer>
                        </section>

                    </div>
                    
                </div>
            </div>
            
        </main> 
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs">
                <div class="content-card slider-card">
                    <h2 class="content-card-extras-title no-margin">Lignende film</h2>
                    <div class="slider-items row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
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

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="movie-card-container">
                                <a href="filmside.php">
                                    <div class="movie-card animated">
                                        <img src="images/movies/thumbs/17634a_thumb.jpg" alt="...">
                                        <div class="movie-card-headline">
                                            <h2>Det hvide folk</h2>
                                            <p>Instr.: Lisa Aschan</p>
                                        </div>
                                        <div class="movie-card-content">
                                            <p>Alex bliver samlet op foran en grønthandler og ført til et underjordisk fængsel for ubudne gæster, der skal deporteres fra Sverige...</p>
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

                        <div class="col-xs-12 col-sm-6 col-md-4">
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
        </div>
    </div>

<?php include('footer.php'); ?>