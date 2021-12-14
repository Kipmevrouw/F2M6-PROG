<?php

function art_load_styles_scripts(){
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'art_load_styles_scripts');