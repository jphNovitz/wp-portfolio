<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div id="single" class="container" style="min-height: 100vh;">
            <div class="row">
                <h1 class="columns small-12"><?php the_title(); ?></h1>
            </div>
        
            <p class="post-info">
                Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
            </p>
            <div class="post-content">
                <?php the_content(); ?>
            </div>

        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>