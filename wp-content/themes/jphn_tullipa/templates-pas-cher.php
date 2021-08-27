<?php
/*
 * Template Name: Site pas cher
 */

$query = new  WP_Query([
    'category_name' => 'site-web-pas-cher'
]);

get_header();
require_once (get_template_directory().'/template-parts/home/for-what.php');

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post(); ?>
        <section id="pas-cher" class="m2">
        <div class="row m2 ">
            <div class="columns small-12 medium-7 large-5 align-middle">
                <h4 class="article-title">
                    <?php the_title(); ?>
                    </h4>
                <aside class=" big lead">
                    <?php the_excerpt(); ?>
                </aside>
                <!--            <p><a href="/portfolio" class="button primary rounded text-white"></a></p>-->
            </div>
        </div>
        <div class="expanded row m2" style="justify-content: space-evenly;">
            <?php the_post(); ?>
        </div>

    <?php
    endwhile;
endif;
?>

    index site web pas cher


<?php
get_footer();
?>