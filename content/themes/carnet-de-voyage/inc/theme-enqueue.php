<?php

function cdv_scripts() {

  wp_enqueue_style('carnet-de-voyage-css', get_theme_file_uri('/public/css/app.css'));

  wp_enqueue_script('carnet-de-voyage-app-vendor', get_theme_file_uri('/public/js/vendor.js'));
  wp_enqueue_script('carnet-de-voyage-app-js', get_theme_file_uri('/public/js/app.js'));
}

add_action('wp_enqueue_scripts', 'cdv_scripts');
