<?php get_header(); ?> <!-- подключает header.php -->



<section class="hero">

    <div class="container">

        <!-- выводит название сайта -->
        <h1 class="hero-title">
            <?php bloginfo('name') ?>
        </h1>


        <!-- выводит описание сайта (Settings → General → Tagline) -->
        <p class="hero-description">
            <?php bloginfo('description') ?>
        </p>

        <a href="/blog" class="hero-button">
            View Blog
        </a>



    </div>

</section>






<section class="homepage-content">

    <div class="container">

        <?php

        // стандартный WordPress Loop
        if (have_posts()) :
            while (have_posts()) : the_post();

                the_content();
            // выводит контент страницы Home из админки

            endwhile;
        endif;

        ?>

    </div>

</section>

<?php get_footer() ?> <!-- подключает footer.php -->