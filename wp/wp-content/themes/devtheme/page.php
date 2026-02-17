<?php get_header(); ?>
<!-- подключает header.php -->

<section class="page">

    <div class="container">

        <?php

        // Loop загружает текущую страницу (About, Contact, etc)
        if (have_posts()) :

            while (have_posts()) : the_post();
        ?>

                <article class="page-content">

                    <!-- Заголовок страницы -->
                    <h1 class="page-title">

                        <?php the_title(); ?>
                        <!-- выводит About или Contact -->

                    </h1>

                    <!-- Контент страницы -->
                    <div class="page-text">

                        <?php the_content(); ?>
                        <!-- выводит текст из редактора WordPress -->

                    </div>

                </article>

        <?php

            endwhile;

        endif;

        ?>

    </div>

</section>

<?php get_footer(); ?>