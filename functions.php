<?php 

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' ); 
function enqueue_parent_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
} 

// adicionar formato de posts
function igc_theme_support(){
    add_theme_support('post-formats',array('aside','image'));
}
add_action('after_setup_theme','igc_theme_support');

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
    register_post_type('historico', array(
        'labels' => array(
            'name' => __('Histórico'),
            'singular_name' => __('História')
        ),
        'supports' => array(
            'title', 'custom-fields'
        ),
        'public' => true,
        'exclude_from_search' => false,
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'historico')
            )
    );
    register_post_type('aviso', array(
        'labels' => array(
            'name' => __('Avisos'),
            'singular_name' => __('Aviso')
        ),
        'supports' => array(
            'title', 'excerpt'
        ),
        'public' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'aviso')
            )
    );
}
add_action('init', 'create_post_type');

// registra custom navigation walker
require_once 'wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';

// Criar menus
register_nav_menus( array(
        'mainMenu' => __('igc Menu Principal','treville-igc'),
        'socialMenu' => __('igc Menu Mídias Sociais','treville-igc'),
        'idiomasMenu' => __('igc Menu Idiomas','treville-igc'),
        'superiorMenu' => __('igc Menu Superior','treville-igc'),
        'uteisMenu' => __('igc Menu Úteis','treville-igc'),
        'visiteMenu' => __('igc Menu Visite','treville-igc')
    ));

// adiciona tamanhos de imagens personalizados
$altura = 370;
$largura = 3*$altura;
add_image_size('bannerImage', $largura, $altura, false); //1100x600 16:9; 1000x500 2:1
// tamanho do thumbnail
set_post_thumbnail_size(1280, 720, true);

/* tamanho do resumo
add_filter('excerpt_length', function($length){
    return 5;
});*/

// definir paginação
add_filter('next_posts_link_attributes','posts_link_attributes_next');
add_filter('previous_posts_link_attributes','posts_link_attributes_previous');
function posts_link_attributes_next(){
    return 'id="btnPosts" class="btn btn-outline color3 float-right ml-3"';
}
function posts_link_attributes_previous(){
    return 'id="btnPosts" class="btn btn-outline color3 float-right"';
}
