<?php

// ========================================
// Подключение CSS и JS
// ========================================

function devtheme_enqueue_assets() {    //мы создаем функцию

    // style.css (обязательный файл темы)
    wp_enqueue_style(  // wp_enqueue_style — WordPress функция, которая подключает основной CSS
        'devtheme-style',    // уникальное имя стиля (можно любое)
        get_stylesheet_uri(),  // возвращает путь: /wp-content/themes/devtheme/style.css 
        array(),   //зависимостей пока нет
        '1.0'  // версия
    );

    // main.css
    wp_enqueue_style(
        'devtheme-main-style',

        //get_template_directory_uri() возвращает http://localhost/wp-content/themes/devtheme, а с помощью [ . '/assets/css/main.css' ],
        //получаем теперь http://localhost/wp-content/themes/devtheme/assets/css/main.css

        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0'
    );

    // main.js
    wp_enqueue_script( //говорит WordPress подключить JS

        'devtheme-main-js',

        get_template_directory_uri() . '/assets/js/main.js', //путь к файлу

        array(), //зависимости (например jquery)

        '1.0', //версия (для кеша)

        true // true = подключить перед </body>  ||  // false = подключить в <head>
    );

}

add_action('wp_enqueue_scripts', 'devtheme_enqueue_assets');


// ========================================
// Регистрация меню
// ========================================

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


// WordPress в определённый момент говорит:

// "Я сейчас на этапе after_setup_theme. Есть ли функции, которые нужно выполнить?"

// И выполняет всё, что зарегистрировано через:

// add_action('after_setup_theme', 'имя_функции');
