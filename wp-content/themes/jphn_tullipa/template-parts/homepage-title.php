<?php
/**
 * file site-title.php
 * Title of the main site
 * This has to be included into header.php (no more no less)
 * author: Novitz Jean-Philippe <novitz@gmail.com>
 * date: 02-2019
 */
?>

<header class="row align-middle m2" id="intro">
    <div id="" class="columns small-12 large-12">
        <div class="row">
            <h2 class="columns small-6">Création de sites internet sur mesure à Liège.</h2>
            <h1 class="columns small-12"> Une communication efficace pour faire connaître votre entreprise ou votre activité et augmenter vos ventes.</h1>
            <h3 class="columns small-12">
                <?php echo(get_option('pitch')); ?>
            </h3>
        </div>
    </div>
    <div class="columns small-12 large-6 hide-for-small-only">
        <div id="container-puzzle">
            <div class="row">
                <div class="thumb" id="t1"></div>
                <div class="thumb" id="t2"
                ></div>
                <div class="thumb" id="t3"
                ></div>
                <div class="thumb" id="t4"
                ></div>
                <div class="thumb" id="t5"
                ></div>
                <div class="thumb" id="t6"
                ></div>
                <div class="thumb" id="t7"
                ></div>
                <div class="thumb" id="t8"
                ></div>
                <div class="thumb" id="t9"
                ></div>
                <div class="thumb" id="t10"
                ></div>
                <div class="thumb" id="t11"
                ></div>
                <div class="thumb blank" id="t12"
                >
                </div>
            </div>
        </div>
    </div>
</header>
