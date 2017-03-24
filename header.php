<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <title><?php bloginfo(); ?> 2017</title>

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

<body <?php body_class(); ?>>

  <?php
  if (!is_front_page()) {
    get_sidebar('navigation'); 
  } 
  ?>