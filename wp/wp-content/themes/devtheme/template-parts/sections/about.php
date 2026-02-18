<?php 

/*
About section
*/

$about_title = get_field('about_title');
$about_description = get_field('about_description');
$about_button = get_field('about_button_text');
?>

<section class="about">
    <div class="container">

        <?php if($about_title): ?>
            <h2 class="about-title">
                <?php echo esc_html($about_title) ?>
            </h2>
        <?php endif ?>

        <?php if($about_description): ?>
            <p class="about-description">
                <?php echo esc_html($about_description) ?>
            </p>
        <?php endif?>

        <?php if($about_button): ?>
            <a href="<?php echo home_url('/about') ?>" class="about-button">
                <?php echo esc_html($about_button) ?>
            </a>
        <?php endif?>

    </div>
</section>