<?php

// Подключение CSS файла темы
function devtheme_enqueue_styles() {   //мы создаем функцию

    // wp_enqueue_style — WordPress функция, которая подключает CSS
    wp_enqueue_style(
        'devtheme-style', // уникальное имя стиля (можно любое)
        get_stylesheet_uri() // возвращает путь: /wp-content/themes/devtheme/style.css 
    );

}

add_action('wp_enqueue_scripts', 'devtheme_enqueue_styles'); //когда загружается страница → выполнить нашу функцию


function devtheme_register_menus() {

    // register_nav_menus — говорит WordPress:
    // "в моей теме есть меню"
    register_nav_menus(array(

        // primary — это ID меню (используется в коде)
        // Primary Menu — название в админке
        'primary' => 'Primary Menu',

    ));
        
    
}

add_action('after_setup_theme', 'devtheme_register_menus');