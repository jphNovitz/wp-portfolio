<?php

$site = new  WP_Query([
    'post_type' => 'portfolio',
    'orderby' => 'rand',
    'order' => 'ASC'
]);
$x = 0;
?>

<section class="row m2" style="background-color: rgba(225, 226, 227, .95) ; margin-bottom: 10rem;">
    <div class="columns small-12" id="demos">
        <h3>Réalisations et démos</h3>
    </div>
    <?php
    while ($site->have_posts()) :
        $site->the_post();
        if ($x == 0):
            //    echo (get_the_ID());
            ?>
            <article class="columns small-12 medium-6 large-4  site-parent"
                     style="background-image: url(
                             '<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>'">
                <div class="text-center site-child-1">
                    <h3><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <!--            <p>le code se trouve sur <a href="https://github.com/jphNovitz/sandwicherie">github</a></p>-->
                </div>
            </article>

        <?php else:
            if ($x == 1 || $x == 3):
                if ($x == 1)  echo "<div class='columns small-12 medium-6 large-8 '>";
                echo "<div class='row site-parent-row' style='background-color: white ; height: 25vh ; '>";
            endif; ?>


            <article class="columns small-12 medium-6 large-6 site-parent-secondary "
                     style=" background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>') ;">
                <div class="site-child-1">
                    <h4><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php the_excerpt(); ?>  </p>
                </div>
            </article>
            <?php if ($x == 2 || $x == 4):
            echo "</div>";
            if ($x == 4) echo "</div>";
        endif; ?>
        <?php

        endif;
        $x++;
    endwhile;
    ?>
    </div>
    <!--    </div>-->
</section>


