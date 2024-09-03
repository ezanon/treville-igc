<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function my_mime_types($mime_types){
$mime_types[‘doc’] = ‘application/msword’;
$mime_types[‘docx’] = ‘application/vnd.openxmlformats-officedocument.wordprocessingml.document’;
$mime_types[‘rar’] = ‘application/x-rar-compressed’;
$mime_types[‘tar’] = ‘application/x-tar’;
$mime_types[‘gz’] = ‘application/x-gzip’;
$mime_types[‘gzip’] = ‘application/x-gzip’;
$mime_types[‘tiff’] = ‘image/tiff’;
$mime_types[‘tif’] = ‘image/tiff’;
$mime_types[‘bmp’] = ‘image/bmp’;
$mime_types[‘svg’] = ‘image/svg+xml’;
$mime_types[‘psd’] = ‘image/vnd.adobe.photoshop’;
$mime_types[‘ai’] = ‘application/postscript’;
//$mime_types[‘indd’] = ‘application/x-indesign’; // not official, but might still work
$mime_types[‘eps’] = ‘application/postscript’;
$mime_types[‘rtf’] = ‘application/rtf’;
$mime_types[‘txt’] = ‘text/plain’;
$mime_types[‘wav’] = ‘audio/x-wav’;
$mime_types[‘csv’] = ‘text/csv’;
$mime_types[‘xml’] = ‘application/xml’;
//$mime_types[‘flv’] = ‘video/x-flv’;
//$mime_types[‘swf’] = ‘application/x-shockwave-flash’;
$mime_types[‘vcf’] = ‘text/x-vcard’;
//$mime_types[‘html’] = ‘text/html’;
//$mime_types[‘htm’] = ‘text/html’;
//$mime_types[‘css’] = ‘text/css’;
//$mime_types[‘js’] = ‘application/javascript’;
$mime_types[‘ico’] = ‘image/x-icon’;
//$mime_types[‘otf’] = ‘application/x-font-otf’;
//$mime_types[‘ttf’] = ‘application/x-font-ttf’;
//$mime_types[‘woff’] = ‘application/x-font-woff’;
//$mime_types[‘ics’] = ‘text/calendar’;
$mime_types['epub'] = 'application/epub+zip';
return $mime_types;
}
// tirei
//add_filter(‘upload_mimes’, ‘my_mime_types’, 1, 1);


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
            //'title', 'thumbnail', 'excerpt', 'custom-fields'
            'title','custom-fields'
        ),
        'public' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners')
            )
    );
//    register_post_type('historico', array(
//        'labels' => array(
//            'name' => __('Histórico'),
//            'singular_name' => __('História')
//        ),
//        'supports' => array(
//            'title', 'custom-fields'
//        ),
//        'public' => true,
//        'exclude_from_search' => false,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'menu_icon' => 'dashicons-images-alt2',
//        'rewrite' => array('slug' => 'historico')
//            )
//    );
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
add_image_size('bannerImage', $largura, $altura, true); //1100x600 16:9; 1000x500 2:1
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
