<?php

function galac_load_scripts() {
    wp_enqueue_style('galac-style', get_theme_file_uri('src/css/style.css'));
    wp_enqueue_script('custom-script', get_theme_file_uri('src/js/main.js'), array(), '1.0',false);
}

add_action('wp_enqueue_scripts', 'galac_load_scripts');
