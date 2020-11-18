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
        echo '<div class="row ">';
        while (have_posts()) :
            the_post();
           
          //  if($x==1) :
           //     echo '<div class="row ">';
          //  elseif ($x === 15):
          //      echo '</div> <div class="row justify-center">';
           // endif;
            echo '<div class="columns small-6  medium-5 medium-offset-1 large-3 card-parent">';
            echo '<div class="card">';
            the_title('<h4 class="">', '</h4> </a>');
            the_content();
            echo '</div>';
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