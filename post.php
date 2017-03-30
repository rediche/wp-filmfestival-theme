<?php include('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="content-card-title">Vi søger en outreach koordinator (løntilskud)</h1>
                    </div>
                    <div class="col-xs-12">
                        <div class="post-image"
                             <?php if (has_post_thumbnail()) { ?>
                                style="background-image:url('<?php the_post_thumbnail_url('large'); ?>');"
                             <?php } ?>></div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <p class="post-lead">Vil du være med til at tilrettelægge og opbygge et nyt og stærkt kontaktlærernetværk for skoleprogrammet på Danmarks største spillefilmfestival?</p>
                        <p>Så er du måske vores kommende outreach-koordinator.</p>
                        <p>CPH PIX er en af Københavns største årlige kulturbegivenheder for både børn, unge og voksne med et filmprogram bestående af mere end 200 film fra hele verden. Næste udgave finder sted i efteråret 2017, men vi er allerede nu i fuld gang med planlægningen og med at forbedre de måder, vi når ud til vores brugere på.</p>
                        <p>Som outreach-koordinator bliver du sammen med festivalens faste hold tovholder på udvidelsen og optimeringen af festivalens kontaktlærernetværk for grundskoler og gymnasier i hovedstadsområdet.</p>
                        <p>Dine primære arbejdsopgaver vil omfatte:
                            <ul>
                                <li>Forbedring af kontaktlærernetværkets funktioner og kontaktkanaler</li>
                                <li>Direkte outreach og kontakt til skoler og faglærere</li>
                                <li>Rekruttering af nye personer til netværket</li>
                            </ul>
                        </p>
                        <p>Hos os kommer du til at få masser af ansvar, og derfor forventer vi, at du kan arbejde struktureret og selv tager initiativ til nye opgaver. Din baggrund er inden for kommunikation og/eller inden for uddannelse/pædagogik, du kan lide at skrive  og gør det godt og fejlfrit  og er ikke bange for at gribe knoglen og række ud til hovedstadsområdets mange skoler og lærere. Er du filmglad, har kendskab til skolemiljøerne og interesse i formidling af film og kultur i undervisningssammenhænge, er det bestemt ikke en ulempe.</p>
                        <p>Vi kan til gengæld tilbyde:
                            <ul>
                                <li>Praktisk erfaring med outreach og formidling</li>
                                <li>Unikt indblik i film- og kulturverdenen</li>
                                <li>En udfordrende arbejdsplads med et godt socialt sammenhold</li>
                            </ul>
                        </p>
                        <p>Stillingen er en virksomhedspraktik/løntilskudsstilling og løber fra medio februar til juni, men kan tilpasses den rigtige kandidat. Ansøgningsfrist er 9. januar 2017 kl. 12.00. Vi indkalder løbende til samtaler.</p>
                        <p><strong>Motiveret ansøgning samt CV sendes til job@cphpix.dk.</strong></p>
                        <p>Har du spørgsmål til stillingen, er du velkommen til at kontakte Sidsel Søgaard Spas på <a href="mailto:sidsel@cphpix.dk">sidsel@cphpix.dk</a> eller <a href="tel:25137526">tlf. 25 13 75 26</a>.</p>
                        <h2>Om CPH PIX</h2>
                        <p>Den nye udgave af CPH PIX, der mødte sit publikum for første gang i oktober 2016, inviterer til filmoplevelser for børn, unge og voksne, med over 200 fiktionsfilm fra mere end 45 lande på programmet. Med festivalens dedikerede skole- og familieprogram, BUSTER, er CPH PIX en populær publikumfestival, der går i dialog med sit publikum - uagtet alder - for at italesætte filmkunstens rolle og understrege dens evne til både at være et vindue til verden omkring os og et spejl for os selv.</p>
                        <p>Festivalen havde i sit første år 128.000 publikummer fordelt over året, heraf 65.000 i festivalperioden.</p>
                    </div>
                </div>
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

<?php include('footer.php'); ?>