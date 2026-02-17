<!-- WordPress автоматически использует:

single.php → для страницы одного поста

Когда пользователь нажимает:

Post title → открывается single.php -->


<?php get_header(); ?>
<!-- подключает header.php -->

<section class="single-post">

    <div class="container">

        <?php

        // WordPress Loop — загружает текущий пост
        if (have_posts()) :

            while (have_posts()) : the_post();
            ?>

                <article class="post">

                    <!-- Заголовок поста -->
                    <h1 class="post-title">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Meta информация -->
                    <div class="post-meta">

                        <span class="post-date">
                            <?php echo get_the_date(); ?>
                        </span>
                        <!-- дата поста -->

                        <span class="post-author">
                            by <?php the_author(); ?>
                        </span>
                        <!-- автор поста -->

                    </div>

                    <!-- Контент поста -->
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php

            endwhile;

        endif;

        ?>

    </div>

</section>

<?php get_footer(); ?>



<!-- User clicks post
     ↓
the_permalink()
     ↓
WordPress loads single.php
     ↓
WordPress Loop loads that post
     ↓
the_content() shows full content -->