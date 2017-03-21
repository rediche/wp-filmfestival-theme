<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <title>Filmfestival 2017</title>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!--<script src="./bower_components/webcomponentsjs/webcomponents-lite.js"></script>
  <link rel="import" href="./bower_components/paper-ripple/paper-ripple.html">
  <link rel="import" href="./bower_components/paper-toast/paper-toast.html">
  <link rel="import" href="./bower_components/iron-form/iron-form.html">
  <link rel="import" href="./bower_components/paper-radio-group/paper-radio-group.html">
  <link rel="import" href="./bower_components/paper-checkbox/paper-checkbox.html">
  <link rel="import" href="./bower_components/paper-listbox/paper-listbox.html">
  <link rel="import" href="./bower_components/paper-item/paper-item.html">
  <link rel="import" href="./bower_components/paper-dropdown-menu/paper-dropdown-menu.html">-->
  <!--<link rel="stylesheet" href="styles/main.css">-->

  <?php wp_head(); ?>
</head>

<body>

  <?php 
  if(basename($_SERVER[REQUEST_URI]) != 'index.php') {
    include('navigation.php');
  }
  ?>