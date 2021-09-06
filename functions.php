<?php
function wkode_files() {
    wp_enqueue_style('wkode_main_styles', get_stylesheet_uri() );
/*     wp_enqueue_script('wkode-js-bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', NULL, '1.0', true); */
    wp_enqueue_script('wkode-js-bootstrap', get_theme_file_uri('/dist/main.js'), NULL, '1.0', true);
    wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('main-css', get_theme_file_uri('/dist/main.css'));
}
add_action('wp_enqueue_scripts', 'wkode_files' );

function wkode_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wkode_features');
