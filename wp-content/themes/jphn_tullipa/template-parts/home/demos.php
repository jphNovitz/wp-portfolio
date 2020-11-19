<?php

$site = new  WP_Query([
    'post_type' => 'portfolio',
    'orderby' => 'rand',
    'order' => 'ASC',
    'status' => 'published',
    'posts_per_page' => '6'
]);
$x = 0;
?>

<section id="demos" class="m2">
    <div class="row m2 ">
        <div class="columns small-12 medium-7 large-5 align-middle">
            <h4 class="article-title">Ce que je fais</h4>
            <aside class=" big lead">
                Quelque uns de mes projets les plus récents
            </aside>
            <p><a href="/portfolio" class="button primary rounded text-white">Portfolio</a></p>
        </div>
    </div>

    <?php
    while ($site->have_posts()) :
        $site->the_post();

        if ($x === 0):
            echo '<div class="expanded row m2" style="justify-content: space-evenly;">';

        ?>

       <?php
       else:
            if ($x === 3):
                echo '</div>';
                echo '<div class="row m2"  style="justify-content: space-evenly;">';
            endif;

            ?>

            <?php
//if ($x == 2 ):
//                echo "</div>";
            if ($x === 6) echo "</div>";
//            endif;
            ?>
        <?php

        endif;
        ?>

            <article class="columns small-12  medium-6 large-3 card"
                     style="background-image: url(
                             '<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>'">
                <div class="card-divider">
                    <h4><?php the_title(); ?></h4>
                    <br/><a href="<?php echo get_post_permalink(); ?>">
                        <i class="fi-arrow-right link size-72"></i>
                    </a>
                    <!--                            <a href="--><?php //echo get_post_permalink();
                    ?><!--">--><?php //the_title();
                    ?><!--</a>-->
                    <!--
        <p>-->
                    <!--                                --><?php //the_excerpt();
                    ?>
                    <!--                            </p>-->
                    <!--            <p>le code se trouve sur <a href="https://github.com/jphNovitz/sandwicherie">github</a></p>-->
                </div>
            </article>

            <?php
        $x++;
    endwhile;
    ?>


</section>
