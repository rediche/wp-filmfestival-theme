<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="content-card">
                <div class="row">
                    <div class="col-xs">
                        <h1 class="error-title">404</h1>
            	        <p class="error-text"><?php _e( 'These are not the pages you\'re looking for.', 'cphpix' ); ?></p>
                        <a href="javascript:window.history.back()" class="button error-button">Go back
                            <paper-ripple></paper-ripple>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>