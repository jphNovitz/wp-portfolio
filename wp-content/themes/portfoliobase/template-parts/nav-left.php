<?php 
/**
 * file nav-left.php
 * This is the main 'left' menu
 * This has to be included into header.php (just simple)
 * author: Novitz Jean-Philippe <novitz@gmail.com>
 * date: 02-2019
 */
?>

<div class="list-group">
    <?php 
        $query = new WP_Query(['post_type'=>'portfolio']);
        if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post(); 
    ?>
            <div class="list-group-item list-group-item-action">
                <?php
                    echo '<a href="'.get_the_permalink().'">';
                    echo get_the_title();
                    echo '</a>'; 
                ?>
            </div>
    <?php 
            endwhile;
        endif;
    ?>
</div>