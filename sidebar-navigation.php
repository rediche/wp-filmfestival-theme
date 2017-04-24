<nav class="main-navigation">
    <div class="container">
        <div class="row between-xs middle-xs">
            <div class="col-xs">
                <div class="main-navigation-container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5">
                            <div class="sitename-burger-container">
                                <a class="sitename" href="<?php echo site_url(); ?>">
                                    <?php bloginfo(); ?>
                                    <span><?php bloginfo('description'); ?></span>
                                </a>
                                <span class="burger"><i class="fa fa-bars" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7">
                            <?php 
                                // Hent menuen tilknyttet menu området: Primary
                                if (has_nav_menu( 'primary' )) {
                                    wp_nav_menu( array( 
                                        'theme_location' => 'primary',
                                        'menu_class' => 'menu main-navigation-items' // Tilføj en speciel class: main-navigation-items
                                    ) );
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>