<?php

/*** Editor clasico ***/
add_filter('use_block_editor_for_post', '__return_false', 10);

add_action('wp_enqueue_scripts', 'artech_child_theme_styles', 3);
function artech_child_theme_styles()
{
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/main.js?v=' . time(), array(), null, true);
    wp_enqueue_style('artech-parent-style', get_template_directory_uri() . '/style.css', array('bootstrap'));
    wp_enqueue_style('artech-child-style', get_stylesheet_uri(), array('artech-parent-style'));
}



// Incluir los shortcodes
require_once get_stylesheet_directory() . '/shortcodes/shortcode-puntos-de-venta-sorsa.php';
require_once get_stylesheet_directory() . '/shortcodes/shortcode-nuestras-marcas.php';
require_once get_stylesheet_directory() . '/shortcodes/shortcode-nuestros-productos.php';
