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
while ($site->have_posts()) : $site->the_post();
    ?>

    <div class="small-12 columns row  align-self-middle single-title">
        <h2 class="align-self-middle">
            <?php the_title(); ?>
        </h2>
        <ul class="breadcrumbs text-center">
            <li>
                Site: <a href="<?php echo $customFields['portfolio_url'][0] ?>">
                    <?php echo $customFields['portfolio_url'][0] ?>
                </a>
            </li>
            <li>github: <a href="<?php echo $customFields['portfolio_url_git'][0] ?>">
                    <?php echo $customFields['portfolio_url_git'][0] ?>
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="columns small-12 large-8 large-offset-2">
            <p class="lead">
                <?php the_excerpt(); ?>
            </p>
        </div>
    </div>

    <div class="row m2">
        <div class="small-6 large-2 large-offset-3 portfolio-terms">
            <ul class="menu simple">
                <?php foreach ($langageTerms as $language): ?>
                    <li><?php echo '#'.$language->name ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="small-6 large-2 large-offset-2 portfolio-terms">
            <ul class="menu simple">
                <?php foreach ($technoTerms as $techno): ?>
                    <li><?php echo '#'.$techno->name ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="row m2 ">
        <div class="columns large-9">
            <?php the_content(); ?>
        </div>
    </div>

<?php
endwhile;
wp_reset_postdata();
?>