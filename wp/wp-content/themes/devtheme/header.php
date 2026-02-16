<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset=<?php bloginfo('charset') ?>>


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- wp_head — ОБЯЗАТЕЛЬНО. WordPress вставляет сюда CSS, JS, meta -->
    <?php wp_head() ?>

</head>

<body <?php body_class() ?>>

    <header class="site-header">

        <!-- Название сайта -->
        <div class="site-logo">
            <?php bloginfo('name') ?>
        </div>

        <!-- Кнопка mobile menu -->
        <button class="menu-toggle">
            Menu
        </button>


        <!-- WordPress menu -->
        <nav class="site-nav">
            <?php
                wp_nav_menu(array(

                    // говорим WordPress какое меню выводить
                    'theme_location' => 'primary',

                    // убираем лишний контейнер div
                    'container' => 'false',

                    // добавляем CSS класс
                    'menu_class' => 'nav_manu'

                ));
            ?>
            
        </nav>

        <!--    Что делает wp_nav_menu() - Он берет меню из админки Appearance → Menus и выводит HTML:
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul> -->


    </header>

    <main>

        <!-- ОБЪЯСНЕНИЕ
        wp_head() - Она позволяет WordPress вставлять: Без неё плагины и стили не будут работать.

        CSS
        JS
        meta
        плагины -->