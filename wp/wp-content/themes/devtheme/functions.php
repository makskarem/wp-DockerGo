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