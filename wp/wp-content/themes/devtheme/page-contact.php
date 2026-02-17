<?php get_header(); ?>
<!-- подключает header -->

<section class="contact-page">

    <div class="container">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

                <!-- Заголовок -->
                <h1 class="contact-title">
                    <?php the_title(); ?>
                </h1>

                <!-- Контент страницы -->
                <div class="contact-content">
                    <?php the_content(); ?>
                </div>

        <?php
            endwhile;
        endif;
        ?>


        <!-- Contact Form -->
        <form class="contact-form">

            <!-- Name -->
            <input
                type="text"
                name="name"
                placeholder="Your Name"
                required>

            <!-- Email -->
            <input
                type="email"
                name="email"
                placeholder="Your Email"
                required>

            <!-- Message -->
            <textarea
                name="message"
                placeholder="Your Message"
                required></textarea>

            <!-- Button -->
            <button type="submit">
                Send Message
            </button>

        </form>

    </div>

</section>

<?php get_footer(); ?>