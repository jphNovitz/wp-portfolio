<?php
/*
 * Template Name: Site pas cher
 */

$query = new  WP_Query([
    'category_name' => 'site-web-pas-cher'
]);

get_header(); ?>

    <div class="grid-container">
        <?php

        require_once(get_template_directory() . '/template-parts/home/for-what.php');

        if ($query->have_posts()):
        while ($query->have_posts()):
        $query->the_post();;
        ?>
        <section id="pas-cher" class="m2">
            <div class="row m2 ">
                <div class="columns small-12 medium-10 large-8 align-left">
                    <h4 class="article-title">
                        <?php the_title(); ?>
                    </h4>
                    <aside class=" big lead">
                        <?php the_excerpt(); ?>
                    </aside>
                    <!--            <p><a href="/portfolio" class="button primary rounded text-white"></a></p>-->
                </div>
            </div>
            <div class="row m2">

                <?php the_content(); ?>
            </div>

            <?php
            endwhile;
            endif;
            ?>
    </div>
<?php
get_footer();
?>