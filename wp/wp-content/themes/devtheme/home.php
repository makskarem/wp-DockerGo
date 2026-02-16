<?php get_header(); ?>


<section class="blog">

    <h1>Blog</h1>

    <div class="blog-grid">

        <?php
        // WordPress Loop — выводит посты

        if (have_posts()):
            while (have_posts()) : the_post()
        ?>

                <article class="blog-card">

                    <!-- featured image -->
                    <?php if (has_post_thumbnail()): //has_post_thumbnail() - проверяет есть ли у поста изображение и если есть, то выполняет div?>  

                        <div class="blog-image">

                            <?php the_post_thumbnail('medium'); ?>

                        </div>

                    <?php endif ?>

                    <!-- title -->

                    

                    <h2 class="blog-title">
                        
                        <!-- the_permalink() - показывает заголовок поста, делает заголовок кликабельным, при клике открывается страница этого поста -->
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title() ?>
                        </a>

                    </h2>


                    <!-- excerpt -->

                    <div class="blog-excerpt">

                        <?php the_excerpt() ?>

                    </div>

                </article>

        <?php

            endwhile;

        else :

            echo "<p>No posts found</p>";

        endif;

        ?>

    </div>


</section>












<?php get_footer(); ?>