<?php 
/**
 * Pitch is the punchline, the first impression
 * author: Novitz Jean-Philippe <novitz@gmail.com>
 * date: 02-2019
 */

$query = new WP_Query([
    'post_type' => 'page',
    'p' => 32
    ]);
if ($query->have_posts()){
    while ($query->have_posts()):
        $query->the_post();
        echo "<div class='jumbotron'>";
            echo "<h1>".get_the_title()."</h1>";
            echo "<p>".get_the_content()."</p>";
        echo "</div>";
    endwhile;
    
}


?>

