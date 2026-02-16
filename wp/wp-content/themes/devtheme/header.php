<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset=<?php bloginfo('charset') ?>>


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- wp_head — ОБЯЗАТЕЛЬНО. WordPress вставляет сюда CSS, JS, meta -->
    <?php wp_head() ?>

</head>

<body <?php body_class() ?>>

    <header>

        <?php bloginfo('name') ?>

        <?php

        // Что делает wp_nav_menu()

        //     Он берет меню из админки и выводит HTML:

        //     <ul>
        //         <li><a href="/">Home</a></li>
        //         <li><a href="/about">About</a></li>
        //     </ul>
        wp_nav_menu(array(

            // указываем какое меню выводить
            'theme_location' => 'primary',

        ))

        ?>

    </header>

<main>







        <!-- ОБЪЯСНЕНИЕ
wp_head()

Она позволяет WordPress вставлять:

CSS
JS
meta
плагины

Без неё плагины и стили не будут работать. -->