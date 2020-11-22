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
<?php 
    $gallery = get_post_gallery_images(); 
            if (count($gallery) > 0) :
?>
    <div class="row">
        <div class="columns small-12">
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
        <?php 
            
            $x = 0;
            foreach ($gallery as $image) : 
                if ($x == 0) $status = 'is-active';
                        else $status = '';
           ?>
            
      <li class="<?php echo $status; ?> orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="<?php echo $image ?>" alt="Space">
          <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
        </figure>
      </li>
        <?php 
            $x++;
            endforeach;
            
            ?>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr">First slide details.</span>
      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
    </button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>
    </div>
    </div>
<?php 
    endif ;
?>
  

    <div class="row m2 ">
        <aside class="columns small-6  medium-3 ">
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
        <aside class="columns small-6 medium-3">
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
        <aside class="columns small-6 medium-3">
        <div class="row aside-links">
            <span class="columns small-12 name">    
            Technos
                </span>
                <span class="columns small-12 description">
                <?php foreach ($technoTerms as $techno): 
                    echo '#'.$techno->name.' ';
                    endforeach; ?>
                </span>
                <span class="columns small-12 link-icon">
                <i class="fi-widget"></i>
                </span>
        </aside>
        <aside class="columns small-6 medium-3">
        <div class="row aside-links">
            <span class="columns small-12 name">    
            Languages
                </span>
                <span class="columns small-12 description">
                <?php 
                foreach ($langageTerms as $language):
                     echo '#'.$language->name.' '; 
                 endforeach; 
                 ?>
                </span>
                <span class="columns small-12 link-icon">
                <i class="fi-laptop"></i>
                </span>
        </aside>
    </div>




<?php
endwhile;
wp_reset_postdata();
?>