<?php get_header() ?>


<main>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

            <article>

                <h1><?php the_title() ?></h1>

                <p>

                    Автор: <?php the_author() ?>
                    Дата: <?php the_date() ?>

                </p>

                <?php the_content() ?>
            </article>

        <?php endwhile ?>
    <?php endif ?>

</main>


<?php get_footer() ?>