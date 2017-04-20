<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <title><?php bloginfo(); ?> 2017</title>
  <?php include(get_template_directory() . '/partials/social-meta-tags.php'); ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/webcomponentsjs/webcomponents-lite.js"></script>
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-ripple/paper-ripple.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-toast/paper-toast.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/iron-form/iron-form.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-radio-group/paper-radio-group.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-checkbox/paper-checkbox.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-listbox/paper-listbox.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-item/paper-item.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-dropdown-menu/paper-dropdown-menu.html">

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

if (empty($background_image)) {
  $background_image = "Was empty";
}

//echo $background_image;
?>

<body <?php body_class(); ?> 
      <?php if (isset($background_image)) : echo 'style="background-image: url('.$background_image.');"'; endif; ?>>

  <?php
  if (!is_front_page()) {
    get_sidebar('navigation'); 
  } 
  ?>