<!-- Data som sociale medier bruger når man deler.
     Google bruger også nogle af disse data til Søgemaskineoptimering -->

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@kbhfilm" />
<meta name="twitter:title" content="<?php the_title(); ?>" />

<!-- Open Graph data -->
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:site_name" content="KBHFILM" />

<?php if (has_post_thumbnail()) : ?>
    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
<?php endif; ?>


<!-- Hvis siden har indhold -->
<?php if ($post->post_content != '') : ?>
    <!-- Lav meta description fra indholdet -->
    <meta name="description" content="<?php echo substr(wp_strip_all_tags($post->post_content), 0, 152) . '...'; ?>" />
    <meta property="og:description" content="<?php echo substr(wp_strip_all_tags($post->post_content), 0, 152) . '...'; ?>" />
    <meta property="twitter:description" content="<?php echo substr(wp_strip_all_tags($post->post_content), 0, 197) . '...'; ?>" />
<?php else : ?>
    <!-- Ellers brug en standard beskrivelse -->
    <meta name="description" content="KBHFILM 2017 er ikke en rigtig filmfestival. Men siden er fed, ikke?" />
    <meta property="og:description" content="KBHFILM 2017 er ikke en rigtig filmfestival. Men siden er fed, ikke?" />
<?php endif; ?>