<?php get_header(); ?>

<section class="contact">

    <h1>This is Contact page template</h1>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

            <h2><?php the_title(); ?></h2>

            <div>
                <?php the_content(); ?>
            </div>

    <?php
        endwhile;
    endif;
    ?>

</section>

<?php get_footer(); ?>