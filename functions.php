<?php 

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' ); 

function enqueue_parent_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
} 

// Criar o tipo post para o banner
function create_post_type() {
    register_post_type('banners', array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banner')
        ),
        'supports' => array(
            'title', 'thumbnail', 'excerpt', 'custom-fields'
        ),
        'public' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners')
            )
    );
}
add_action('init', 'create_post_type');

// registra custom navigation walker
require_once 'wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';

// Criar menu principal
register_nav_menus( array(
        'mainMenu' => __('igc Menu Principal','treville-igc'),
        'socialMenu' => __('igc Menu Mídias Sociais','treville-igc'),
        'superiorMenu' => __('igc Menu Superior','treville-igc')
    ));

// adiciona tamanhos de imagens personalizados
add_image_size('bannerImage', 800, 400, true); //1100x600 16:9; 1000x500 2:1



