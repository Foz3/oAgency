<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav class="navbar navbar">
      <a class="navbar-brand mb-0 h1" href="#">oAgency</a>
        <ul class="nav justify-content-end">
        <?php wp_nav_menu(array( 'theme-location' => 'header-menu', 'menu_class' => 'nav') ); ?>
        </ul> 
    </nav>
  </header>