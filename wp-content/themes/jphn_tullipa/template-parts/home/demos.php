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
        <div class="columns small-12 medium-9 align-middle">
            <h4 class="article-title">Développeur <strong>Symfony</strong></h4>
            <aside class=" big lead">
                Développement de site web à Liège. <br/>
                Création de sites internet adapté aux mobiles (responsive).
            </aside>
            <p> <a href="/portfolio" class="button primary rounded text-white">Portfolio</a></p>
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

<div class=""></div>
<div id="techno" class="m2" >
    <div class="row m2">
        <div class="columns small-12 medium-6">
            <h4 class="article-title">Réalisation de projets webs </h4>
            <div class="big lead">
                Développement Web Fullstack
            </div>
            <h5> Programmation backend avec Symfony, Wordpress ou Laralel (langage PHP).
                Développement d'interfaces frontend
                en HTML et css (scss ou sass) et javascript que cela soit ddu vanilla js (de base), du jQuery ou Vue.js
                (*)</h5>

            <a href="mailto:hello@jphnovitz.be" class="button primary rounded text-white m2"  style="margin: 2rem auto">
                Contactez-moi
            </a>

                <h6>Vue.js est un framework javascript moderne et puissant utilisant le databinding permettant de faire des
                    traitements de données et de modifier une page web sans rafraîchissement.</h6>
        </div>
        <div class="columns small-12 medium-6">
            <div class="row">
                <div class="columns small-6 align-center">
                    <article class="aside text-white">
                        <ul class="vertical menu">
                            <li>PHP</li>
                            <li>Symfony</li>
                            <li>Wordpress</li>
                            <li>Woocommerce</li>
                            <li>Prestashop</li>
                        </ul>
                    </article>
                </div>
                <div class="columns small-6">
                    <article class="aside text-white align-middle">
                        <ul class="vertical menu align-middle">
                            <li>Javascript</li>
                            <li>jQuery</li>
                            <li>Vue.js</li>
                        </ul>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="columns small-6">
                    <article class="main text-white">
                        <ul class="vertical menu align-middle">
                            <li> Developpeur Web</li>
                            <li> Backend</li>
                            <li>Intégrateur</li>
                    </article>
                </div>
                <div class="columns small-6">
                    <article class="aside text-white">
                        <ul class="vertical menu align-middle">
                            <li>Ubuntu</li>
                            <li>Php Storm, VS Code</li>
                            <li>Git, npm yarn</li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
