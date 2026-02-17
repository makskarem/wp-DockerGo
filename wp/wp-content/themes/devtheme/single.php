<!-- WordPress автоматически использует:

single.php → для страницы одного поста

Когда пользователь нажимает:

Post title → открывается single.php -->


<?php get_header(); ?>

<main class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="single-post">

                <!-- Post header -->
                <header class="post-header">

                    <h1 class="post-title">
                        <?php the_title(); ?>
                    </h1>

                    <div class="post-meta">

                        <span class="post-date">
                            <?php echo get_the_date(); ?>
                        </span>

                        <span class="post-author">
                            by <?php the_author(); ?>
                        </span>

                        <span class="post-category">
                            <?php the_category(', '); ?>
                        </span>

                    </div>

                </header>

                <!-- Featured image -->
                <?php if (has_post_thumbnail()) : ?>

                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>

                <?php endif; ?>

                <!-- Post content -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

            </article>
            <nav class="post-navigation">

                <div class="nav-previous">
                    <?php previous_post_link('%link', '← Previous post'); ?>
                    <!-- previous_post_link() - Показывает ссылку на предыдущий пост -->
                </div>

                <div class="nav-next">
                    <?php next_post_link('%link', 'Next post →'); ?>
                    <!-- next_post_link() - Показывает ссылку на следующий пост -->
                </div>

            </nav>

    <?php
        endwhile;
    endif; ?>

<?php comments_template(); ?> <!-- — подключает файл: comments.php -->
 
</main>

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