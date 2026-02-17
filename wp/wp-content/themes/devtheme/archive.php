<?php get_header(); ?>
<!-- подключает header.php -->

<main class="container">

    <h1 class="page-title">
        <?php the_archive_title(); ?>
    </h1>
    <!-- выводит заголовок архива (например: Blog, Category: News) -->


    <?php if (have_posts()) : ?>
        <!-- проверяет есть ли посты -->

        <div class="posts-grid">

            <?php while (have_posts()) : the_post(); ?>
                <!-- запускает loop -->

                <article class="post-card">

                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <!-- заголовок поста -->


                    <div class="post-meta">

                        <span class="post-date">
                            <?php echo get_the_date(); ?>
                        </span>

                        <span class="post-author">
                            by <?php the_author(); ?>
                        </span>

                    </div>


                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <!-- краткое описание -->


                    <a href="<?php the_permalink(); ?>" class="read-more">
                        Read more
                    </a>

                </article>

            <?php endwhile; ?>

        </div>

    <?php else : ?>

        <p>No posts found.</p>

    <?php endif; ?>


</main>

<?php get_footer(); ?>