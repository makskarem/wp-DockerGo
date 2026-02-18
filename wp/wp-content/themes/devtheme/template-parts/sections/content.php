<?php
/*
Homepage content section

Выводит контент страницы Home из админки WordPress
*/
?>

<section class="homepage-content">

    <div class="container">

        <?php

        // WordPress Loop
        // загружает текущую страницу (Home)

        if (have_posts()) :

            while (have_posts()) :

                the_post();

                // выводит контент страницы из редактора
                the_content();

            endwhile;

        endif;

        ?>

    </div>

</section>