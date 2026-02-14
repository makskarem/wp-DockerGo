<?php get_header(); ?>


<main>

    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
    
    <article>
        <h2>
            <?php the_title() ?>
        </h2>
    
        <div>
            <?php the_content() ?>
        </div>
    
        <small>
            Автор: <?php the_author() ?> <br>
            Дата создания: <?php the_date() ?>
        </small>
    </article>
    
    <?php endwhile ?>
    <?php endif ?>

</main>

<?php get_footer(); ?>