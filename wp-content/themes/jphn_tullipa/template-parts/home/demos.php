<?php

$site = new  WP_Query([
    'post_type' => 'portfolio',
    'orderby' => 'rand',
    'order' => 'ASC',
    'status' => 'published',
    'posts_per_page' => '9'
]);
$x = 0;
?>

<section class="m2">
    <div class="row m2">
        <div class="columns small-12 medium-7  align-middle">
            <h4 class="article-title">Développeur <strong>Symfony</strong></h4>
            <aside class=" big lead">
                Quelques projets web en php, html/css, javascript et fullstack.
            </aside>
            <p><a href="/portfolio" class="button primary rounded text-white">Portfolio</a></p>
        </div>
    </div>
    <div class="row">
        <?php
        while ($site->have_posts()) :
            $site->the_post();
            ?>
            <div class="columns small-12 medium-6 large-3">
                <article class="card fluid">
                    <div style="background-image: url(
                            '<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>') ;
                            background-size: cover; background-repeat: no-repeat;
                            height: 10rem; width: 100% ; overflow: hidden"></div>
                    <div class="p2 card-section" style="padding: .75rem">
                        <h5>
                            <a href="<?php echo get_post_permalink(); ?>"> <?php the_title(); ?> </a>
                        </h5>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </article>
            </div>
        <?php
        endwhile;
        ?>

    </div>
</section>
