<?php

// Theme setup, fonctionnalités etc...
function carnetdevoyage_setup() {
  // RSS automatique
  add_theme_support( 'automatic-feed-links' );

  // Génération automatique du title
  add_theme_support('title-tag');

  // Support des images mise en avant
  add_theme_support('post-thumbnails');

  // menu de navigation principal
  register_nav_menus([
    'primary' => 'Menu principal'
  ]);

  register_nav_menus([
    'header' => 'Menu Header'
  ]);

}
add_action('after_setup_theme', 'carnetdevoyage_setup');
