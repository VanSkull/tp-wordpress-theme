<?php
/* Ajout du thème parent */
add_action( 'wp_enqueue_scripts', 'theme_assets' );
function theme_assets() {
    wp_enqueue_style( 'twentytwentyone/app_css', get_template_directory_uri() . '/style.css' );    
    wp_enqueue_style('bookworld/app_css', get_stylesheet_directory_uri() . '/assets/css/app.css', [], '1.0');
    wp_enqueue_script('bookworld/script_js', get_stylesheet_directory_uri() . '/assets/js/script.js', [], '1.0', true);
}

acf_register_block_type([
    'name' => 'banniere-front-page',
    'title' => 'Bannière front page',
	'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>',
    'render_template' => get_stylesheet_directory() .'/parts/blocks/banner-library.php',
    /* 'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/blocks/banner-library.css', */
]);

acf_register_block_type([
    'name' => 'livres-en-avant',
    'title' => 'Livres en avant',
	'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>',
    'render_template' => get_stylesheet_directory() .'/parts/blocks/books-highlighted.php',
    /* 'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/blocks/books-highlighted.css', */
]);

acf_register_block_type([
    'name' => 'formulaire-de-contact',
    'title' => 'Formulaire de contact',
	'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>',
    'render_template' => get_stylesheet_directory() .'/parts/blocks/contact-form.php',
    /* 'enqueue_style' => get_stylesheet_directory_uri() . '/assets/css/blocks/form-contact.css', */
]);
