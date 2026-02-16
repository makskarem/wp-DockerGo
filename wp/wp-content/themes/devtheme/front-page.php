<?php get_header(); ?>  <!-- подключает header.php -->

<main>

    <h1>Главная странца</h1>

    <?php if (have_posts()) : ?>  <!-- проверяет есть ли посты -->

        <?php while (have_posts()) : the_post() ?>  <!-- запускает Loop -->

            <article>

                <h1>

                    <!-- //the_permalink - возвращает URL поста, например: http://localhost/hello-world/ -->
                    <!-- Если url показывает не то, что нужно, то в wp переходим в Settings - Permalinks - выбираем (Post name) и сохраняем изменения. -->
                    <a href="<?php the_permalink() ?>">     

                        <!-- the_title() → выводит заголовок поста -->
                        <?php the_title() ?>

                    </a>

                </h1>

                <!-- the_content() → выводит содержимое поста -->
                <?php the_content() ?>

            </article>

        <?php endwhile; ?>  <!-- конец цикла -->

    <?php endif; ?>

</main>

<?php get_footer() ?>  <!-- подключает footer.php -->
