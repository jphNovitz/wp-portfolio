<?php
/*
 Template Name: Portfolio archive
 */

// Top of page =================================
get_header();
// =================================Top of page

?>

<div id ="archive" class="container" style="min-height: 100vh;">
<div class="row">
<h1 class="columns small-12">Portfolio</h1>
</div>
    <?php
    if (have_posts()) {
        $x = 1;
        echo '<div class="row align-middle justify-center ">';
        while (have_posts()) :
            the_post();
           
            echo '<div class="columns small-6  medium-5  large-3 card-parent">';
            echo '<article class="card" style="background-image: url(
                '.get_the_post_thumbnail_url(get_the_ID(), "medium").'">';
               
               ?>
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
            <?php 
            echo '</article>';
            echo '</div>';
            $x++;
        endwhile;

        echo '</div>';
    
    }
    ?>
</div>
<?php
// Bottom of page =================================
get_footer();
// ================================= Bottom of page
?>