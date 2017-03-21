<?php include('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="content-card-title">Nyheder</h1>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <?php for($i = 0; $i < 10; $i++) { ?>
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