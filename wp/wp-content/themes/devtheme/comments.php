<div class="comments">

    <?php if (have_comments()): //Проверяет есть ли комментарии ?>

        <h3>
            Comments: (<?php echo get_comments_number() //Возвращает количество комментариев ?>)
        </h3>

        <ul class="comment-list">
            <?php

            wp_list_comments(array(
            // wp_list_comments - Выводит список комментариев

                'style' => 'ul',
                'short_ping' => true,

            ));

            ?>
        </ul>
    <?php endif; ?>


    <?php
    comment_form();
    // Показывает форму: Name, Email, Comment, Submit и автоматически сохраняет в БД.
    
    // включить комментарии в wordpress: 
    // Dashboard → Settings → Discussion 
    // далее: Allow people to submit comments on new posts
    ?>



</div>