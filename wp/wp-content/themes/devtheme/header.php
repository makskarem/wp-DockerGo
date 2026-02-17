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
        <div class="container header-container">

            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo home_url() //home_url() - возвращает URL главной страницы; ?>">
                    <?php bloginfo('name'); ?>
                    <!-- выводит название сайта
                        которое задается в Settings → General --> -->
                </a>
            </div>

            <!-- Navigation -->

            <!-- Что делает wp_nav_menu() - Он берет меню из админки Appearance → Menus и выводит HTML:
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul> -->

            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', //theme_location - указывает какое меню выводить, primary - это ID, который мы зарегистрировали в functions.php
                    'container' => false, // отключает автоматический <div> вокруг меню
                    'menu_class' => 'nav-menu' // - задает CSS класс для <ul>. WordPress создаст:<ul class="nav-menu">
                        
                    
                )); ?>
            </nav>

        </div>




    </header>

    <main>

        <!-- ОБЪЯСНЕНИЕ
        wp_head() - Она позволяет WordPress вставлять: Без неё плагины и стили не будут работать.

        CSS
        JS
        meta
        плагины -->