<?php

function galac_styles_and_scripts() {
    wp_enqueue_style('galac-style', get_theme_file_uri('src/css/style.css'));
    wp_enqueue_script('custom-script', get_theme_file_uri() . '/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');
