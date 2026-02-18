<?php get_header(); ?> <!-- подключает header.php -->



<main class="site-main">

    <?php
    // подключает hero section
    get_template_part('template-parts/sections/hero');
    ?>


    <?php
    // подключает content section
    get_template_part('template-parts/sections/content');
    ?>


</main>

<?php get_footer() ?> <!-- подключает footer.php -->