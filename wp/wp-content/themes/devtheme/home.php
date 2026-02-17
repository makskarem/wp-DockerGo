<?php get_header(); ?>
<!-- подключает header.php -->

<section class="blog">

    <div class="container">

        <h1 class="blog-title">
            Blog
        </h1>

        <div class="blog-grid">

            <?php

            // WordPress Loop — перебирает все посты
            if (have_posts()) :

                while (have_posts()) : the_post();
                ?>

                    <article class="blog-card">

                        <h2 class="blog-card-title">
                            <?php the_title(); ?>
                            <!-- выводит заголовок поста -->
                        </h2>

                        <p class="blog-card-excerpt">
                            <?php the_excerpt(); ?>
                            <!-- выводит краткое описание -->
                        </p>

                        <a href="<?php the_permalink(); ?>" class="blog-card-button">   
                            <!-- the_permalink() - показывает заголовок поста, делает заголовок кликабельным, при клике открывается страница этого поста -->
                            Read More
                        </a>
                        <!-- ссылка на полный пост -->

                    </article>

                <?php

                endwhile;

            else:

                echo "<p>No posts found</p>";

            endif;

            ?>

        </div>

    </div>

</section>

<?php get_footer(); ?>
