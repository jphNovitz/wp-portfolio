<?php

?>

<div class="col-lg-9">
    <h2> <?php echo get_the_title(); ?> </h2>
    <p> <em><?php echo get_the_excerpt(); ?></em></p>

    <p> <?php echo get_the_content(); ?></p>
</div>

<?php

while ($site->have_posts()) : $site->the_post();
?>

<div class="row m2 ">
    <div class="columns small-12 medium-12 align-middle">
        <h3 class="article-title">
            <?php echo get_the_excerpt(); ?>
        </h3>
        <h2 class=" big lead">
            <?php the_title(); ?>
        </h2>
    </div>
</div>

<div class="row m2 ">
    <div class="columns small-12">
        <?php
        add_filter('the_content', 'remove_shortcode_from');
        the_content();
        remove_filter('the_content', 'remove_shortcode_from');
        ?>
    </div>
</div>
<?php endwhile; ?>