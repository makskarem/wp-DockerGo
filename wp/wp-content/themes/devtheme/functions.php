<?php

// Подключение CSS файла темы
function devtheme_enqueue_styles() {   //мы создаем функцию

    // wp_enqueue_style — WordPress функция, которая подключает основной CSS
    wp_enqueue_style(
        'devtheme-style', // уникальное имя стиля (можно любое)
        get_stylesheet_uri(), // возвращает путь: /wp-content/themes/devtheme/style.css 
        array(), //зависимостей пока нет
        '1.0' // версия
    
    );

    // ========================================
    // подключаем main.css
    // ========================================

    wp_enqueue_style(
        'devtheme-style-main',
        get_template_directory_uri() . '/assets/css/main.css',

        //get_template_directory_uri() возвращает http://localhost/wp-content/themes/devtheme, а с помощью [ . '/assets/css/main.css' ],
        //получаем теперь http://localhost/wp-content/themes/devtheme/assets/css/main.css

        array(), //зависимости
        '1.0'
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

// WordPress в определённый момент говорит:

// "Я сейчас на этапе after_setup_theme. Есть ли функции, которые нужно выполнить?"

// И выполняет всё, что зарегистрировано через:

// add_action('after_setup_theme', 'имя_функции');

add_action('after_setup_theme', 'devtheme_register_menus');