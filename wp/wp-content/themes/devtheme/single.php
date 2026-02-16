<?php get_header() ?>


<!-- WordPress автоматически использует:

single.php → для страницы одного поста

Когда пользователь нажимает:

Post title → открывается single.php -->

<section class="single-post">

    <?php
    if (have_posts()):
        while (have_posts()) : the_post() ?>

            <article>

                <!-- title -->
                <h1>
                    <?php the_title() ?>
                </h1>

                <!-- meta-info -->

                <div class="post-meta">

                    <span>
                        Publisher: <?php the_date() ?>
                    </span>

                    <span>
                        Author: <?php the_author() ?>
                    </span>

                </div>


                <!-- featured image -->

                <?php if (has_post_thumbnail()): ?>

                    <div class="post-image">
                        <?php the_post_thumbnail('large') ?>
                    </div>

                <?php endif ?>

                <!-- content -->

                <div class="post-content">
                    <?php the_content() ?>  <!--Выводит полный контент поста, a the_excerpt() → короткое описание-->
                </div>


            </article>
    <?php

        endwhile;

    endif;

    ?>

</section>


<?php get_footer() ?>


<!-- User clicks post
     ↓
the_permalink()
     ↓
WordPress loads single.php
     ↓
WordPress Loop loads that post
     ↓
the_content() shows full content -->