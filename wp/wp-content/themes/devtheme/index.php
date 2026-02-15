<!-- index.php вызывает:

get_header() → header.php -->


<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article>

            <h2><?php the_title(); ?></h2>

            <p>
                Автор: <?php the_author(); ?><br>
                Дата: <?php the_date(); ?>
            </p>

            <?php the_content(); ?>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>Нет постов</p>

<?php endif; ?>

<?php get_footer(); ?>

<!-- //get_footer() → footer.php -->