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

// добавляем фильтр для меню
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3 );
// nav_menu_link_attributes - хук который сработает при выводе ссылок меню и вернет 3 атрибута в нашу функцию
// filter_nav_menu_link_attributes - наша функция
// 10 - приоритет
// 3 - количество атрибутов которые примет наша функция

function filter_nav_menu_link_attributes($atts, $item, $args){
// $atts - атрибуты которые принадлежат каждой ссылке
// $item - отдельная ссылка, которая попадется в нашу функцию
// $args - те атрибуты которые есть у wp_nav_menu
if($args -> menu === 'Main'){                   // если название меню такое как мы указали в массиве меню
    $atts['class'] = 'header__nav-item';                 //атрибуту ссылки class дописываем нужное значение с верстки

    if($item->current){                             //если эта ссылка указывает на текущую страничку
        $atts['class'] .= ' header__nav-item-active';         // добавляем класс который покажет активную ссылку меню
    }
};
return $atts;  // отдаем измененные атрибуты
}



?>