<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <title><?php bloginfo(); ?> 2017</title>
  <?php 
    // Inkluder vores Social Media Meta Tags
    include(get_template_directory() . '/partials/social-meta-tags.php'); 
  ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!-- HTML Imports så vi kan lave vores lille toast popup
       og så vi kan få vores ripple effekt på knapperne -->
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/webcomponentsjs/webcomponents-lite.js"></script>
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-ripple/paper-ripple.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-toast/paper-toast.html">

  <?php wp_head(); ?>
</head>

<?php
// Generer tilfældigt baggrundsbillede, 
// hvis vi ikke er på en filmside.
// Hvis vi er på en filmside
// så vis thumbnail som baggrund
$background_image = '';
if (has_post_thumbnail()) :
  $background_image = get_the_post_thumbnail_url();
endif;
?>

<body <?php body_class(); ?> 
      <?php if (isset($background_image)) : echo 'style="background-image: url('.$background_image.');"'; endif; ?>>

  <?php
  // Hvis vi ikke er på forsiden, inkluder navigationen nu
  if (!is_front_page()) {
    get_sidebar('navigation'); 
  } 
  ?>