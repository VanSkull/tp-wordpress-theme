<?php
/* Ajout du thème parent */
add_action( 'wp_enqueue_scripts', 'theme_assets' );
function theme_assets() {
    wp_enqueue_style( 'twentytwentyone/app_css', get_template_directory_uri() . '/style.css' );    
    wp_enqueue_style('mon_theme/app_css', get_stylesheet_directory_uri() . '/assets/css/app.css', [], '1.0');
}