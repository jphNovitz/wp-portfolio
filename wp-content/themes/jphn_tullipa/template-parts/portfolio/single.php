<?php

?>

<?php
//get the taxonomy terms of custom post type
$id = get_queried_object()->ID;
$technoTerms = wp_get_object_terms($id, 'techno');
$langageTerms = wp_get_object_terms($id, 'langage');

$site = new  WP_Query([
    'post_type' => 'portfolio',
    'p' => $id
]);
$customFields = get_post_custom();
//echo '<pre>';
//var_dump($langageTerms);
//echo '</pre>';
?>
<div id ="single" class="container" style="min-height: 100vh;">
<div class="row">
<h1 class="columns small-12">Portfolio</h1>
</div>

<?php

while ($site->have_posts()) : $site->the_post();
    ?>

    <div class="row m2 ">
        <div class="columns small-12 medium-12 align-middle">
            <h3 class="article-title">
            
                <?php foreach ($technoTerms as $techno): 
                    echo '#'.$techno->name.' ';
                    endforeach; ?>
        </h3>
            <h2 class=" big lead">
            <?php the_title(); ?>
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="columns small-12 large-8 large-offset-2">
            <p class="lead">
                <?php the_excerpt(); ?>
            </p>
        </div>
    </div>
    <div class="row m2">
        <div class="columns small-10  large-6 ">
            <h4 class="primary-title">
                <?php 
                foreach ($langageTerms as $language):
                     echo $language->name.' '; 
                 endforeach; 
                 ?>
            </h4>
        </div>
    </div>

    <div class="row m2 ">
        <div class="columns small-12">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="row m2 ">
        <aside class="columns small-6  ">
            <div class="row aside-links">
    <span class="columns small-12 name">
        Site
    </span> 
    <span class="columns small-12 description">
<a href="<?php echo $customFields['portfolio_url'][0] ?>">
                    <?php echo $customFields['portfolio_url'][0] ?>
                </a>
    </span>
    <span class="columns small-12 text- link-icon">

<i class="fi-link"></i>

</span>
            </div>
        </aside>
        <aside class="columns small-6">
        <div class="row aside-links">
            <span class="columns small-12 name">    
            github
                </span>
                <span class="columns small-12 description">
        <a href="<?php echo $customFields['portfolio_url_git'][0] ?>">
                    <?php echo $customFields['portfolio_url_git'][0] ?>
                </a>
                </span>
                <span class="columns small-12 link-icon">
                <i class="fi-social-github"></i>
                </span>
        </aside>
    </div>




<?php
endwhile;
wp_reset_postdata();
?>