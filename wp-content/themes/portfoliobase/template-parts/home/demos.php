<?php

$site = new  WP_Query([
    'post_type' => 'portfolio',
    'orderby' => 'rand',
    'order' => 'ASC'
]);
$x = 0;
?>

<section class="row m2" style="background-color: rgba(225, 226, 227, .95) ; margin-bottom: 10rem;">
    <div class="columns small-12" id="demos">
        <h3>Réalisations et démos</h3>
    </div>
    <?php
    while ($site->have_posts()) :
        $site->the_post();
        if ($x == 0):
            //    echo (get_the_ID());
            ?>
            <article class="columns small-12 medium-6 large-4  site-parent"
                     style="background-image: url(
                             '<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>'">
                <div class="text-center site-child-1">
                    <h3><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <!--            <p>le code se trouve sur <a href="https://github.com/jphNovitz/sandwicherie">github</a></p>-->
                </div>
            </article>

        <?php else:
            if ($x == 1 || $x == 3):
                if ($x == 1)  echo "<div class='columns small-12 medium-6 large-8 '>";
                echo "<div class='row site-parent-row' style='background-color: white ; height: 25vh ; '>";
            endif; ?>


            <article class="columns small-12 medium-6 large-6 site-parent-secondary "
                     style=" background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>') ;">
                <div class="site-child-1">
                    <h4><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php the_excerpt(); ?>  </p>
                </div>
            </article>
            <?php if ($x == 2 || $x == 4):
            echo "</div>";
            if ($x == 4) echo "</div>";
        endif; ?>
        <?php

        endif;
        $x++;
    endwhile;
    ?>
    </div>
    <!--    </div>-->
</section>


<section class="row m2" style="background-color: rgba(225, 226, 227, .95) ; margin-bottom: 10rem;">
    <div class="columns small-12" id="demos">
        <h3>Réalisations et démos</h3>
    </div>
    <article class="columns small-12 medium-6 large-4  site-parent"
             style="background-image: url(
                     '<?php echo get_template_directory_uri(); ?>/assets/img/sites/laclementine_00.png') ;">
        <div class="text-center site-child-1">
            <h3><a href="https://sandwicherie.jphnovitz.be">Sandwicherie</a></h3>
            <p>A la base mon travaile de fin d'études et le site d'une
                sandwhicherie de Saint-Nicolas (La Clémentine). Site réalisé avec <u>Symfony 4</u>.
            </p>
            <p>le code se trouve sur <a href="https://github.com/jphNovitz/sandwicherie">github</a></p>
        </div>
    </article>
    <div class="columns small-12 medium-6 large-8 ">
        <div class="row site-parent-row" style=" background-color: white ; height: 25vh ; ">
            <article class="columns small-12 medium-6 large-6 site-parent-secondary"
                     style=" background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sites/wellness.png') ;
                             background-repeat: no-repeat ;
                             background-size: cover">

                <div class="site-child-1">
                    <p>
                        <span class="lead-description"><a href="http://www.wellness360.be">wellness360.be</a></span>
                        <!--                            <br >est un travaille dirrigé-->
                        <!--                            lors de mes études à l'ISL Saint-LaurentProsoc-->
                        <!--                            Il s'agit d'un annuaire fictifs de centres wellness. Site réalisé avec <u>Symfony 3</u>, le code se-->
                        <!--                            trouve sur -->
                        <br/> Le code se trouve sur <a href="https://github.com/jphNovitz/wellness">Github </a>

                    </p>
                </div>
            </article>
            <article class="columns small-12 medium-6 large-6 site-parent-secondary "
                     style=" background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sites/flat.png') ;">
                <div class="site-child-1">
                    <p>
                        <span class="lead-description"><a
                                    href="http://demos.jphnovitz.be/flat/">Flat demo page</a></span>
                        <br/>est une exercice sur
                        le 'flat design' réalisé en HTML.
                    </p>
                </div>
            </article>
        </div>
        <div class="row site-parent-row" style=" background-color: white ; height: 25vh ; ">

            <article class="columns small-12 medium-6 large-6 site-parent-secondary "
                     style=" background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sites/crearchitex.png');">
                <div class="site-child-1">
                    <p>
                        <span class="lead-description"><a href="http://demos.jphnovitz.be/crearchitex/">Crearchitex demo page</a></span>
                        <!--                            est un site d'apprentissage du <u>html</u>, de <u>Symfony 2</u> et de la découpe design.-->
                    </p>
                </div>
            </article>

            <article class="columns small-12 medium-6 large-6 site-parent-secondary "
                     style=" background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sites/allergens-basics.png') ;">
                <div class="site-child-1">
                    <p>
                        <span class="lead-description"><a href="http://demos.jphnovitz.be/clementine-allergies/">alergene basic</a></span>
                        <!--                            est une démo Vue,js 2. La mise en relation entre des allergies et des aliments.-->
                        <br/><a href="https://jphnovitz.github.io/allergens-basic/">documentation </a> et code
                        <br/><a href="https://github.com/jphNovitz/allergens-basic">github</a>.
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>
