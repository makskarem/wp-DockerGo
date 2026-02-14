<?php get_header(); ?>

<main>

    <?php 
    
    if (have_posts()):
        while (have_posts()):
             the_post();
        
    
    
    ?>

    <article>
        <h2>
            <?php the_title(); ?>
        </h2>
        <div>
            <?php the_content(); ?>
        </div>

        <div> 
            <?php the_author(); ?>
        </div>
        <p><?php the_date() ?></p>
    </article>

<?php 
    
    endwhile;

    else:
        echo "<p>No post found</p>";

    endif;

    
?>

</main>


<?php get_footer(); ?>