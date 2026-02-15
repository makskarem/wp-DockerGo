<!-- index.php вызывает:

get_header() → header.php -->


<?php get_header(); ?>

<main>

<?php 

if (have_posts()):  // если есть посты

    while(have_posts()):  // цикл постов
        
        the_post(); // загружаем данные текущего поста

?>

<article>
    <h2>
        <?php the_title() ?>
    </h2>

    <p>
        Автор: <?php the_author() ?>
    </p>

    <p>
        Дата: <?php the_date() ?>
    </p>

    <div>
        <?php the_content() ?>
    </div>

</article>

<?php 

    endwhile;

else:
    echo "Нет постов";
endif;

?>

</main>

<?php get_footer() ?>  
<!-- //get_footer() → footer.php -->