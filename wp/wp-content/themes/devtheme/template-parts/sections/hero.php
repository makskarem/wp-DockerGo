<?php
/*
Hero section

Отвечает за первый экран homepage
Этот файл подключается через front-page.php
*/

$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_button = get_field('hero_button_text');
?>


<section class="hero">

    <div class="container">

        <?php if ($hero_title): ?>
            <h1 class="hero-title">
                <?php echo esc_html($hero_title) ?>
            </h1>
        <?php endif ?>

        <?php if ($hero_description):  ?>
            <p class="hero-description">
                <?php echo esc_html($hero_description) ?>
            </p>
        <?php endif ?>

        <?php if ($hero_button): ?>
            <a href="<?php echo home_url('/contact'); ?>" class="hero-button">
                <?php echo esc_html($hero_button); ?>
            </a>
        <?php endif; ?>


    </div>

</section>
