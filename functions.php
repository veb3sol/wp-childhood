<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles(){
    wp_enqueue_style('childhook-style', get_stylesheet_uri());
}

function childhood_scripts(){
    wp_enqueue_script('childhook-style', get_template_directory_uri().'/assets/js/main.min.js', array(), null, true);
}

// Добавляем возможность установки лого
add_theme_support('custom-logo');

// Добавляем возможность установки картинки поста
add_theme_support('post-thumbnails');

// Добавляем возможность установки меню
add_theme_support('menus');



?>