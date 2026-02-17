<?php get_header(); ?>
<!-- подключает header -->

<section class="about-page">

    <div class="container">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

                <!-- Заголовок -->
                <h1 class="about-title">
                    <?php the_title(); ?>
                </h1>

                <!-- Контент -->
                <div class="about-content">
                    <?php the_content(); ?>
                </div>

        <?php
            endwhile;
        endif;
        ?>

    </div>

</section>

<?php get_footer(); ?>