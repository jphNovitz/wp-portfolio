<?php
get_header();
?>
    <!--
<?php
    get_template_part('template-parts/pitch');
    ?>
-->

    <!--    <div class="row">-->
    <!--        <div class="columns small-10 small-offset-1 medium-10 offset-medium-1 large-5 large-offset-3">-->
    <!--            <div id="container-puzzle">-->
    <!--                <div class="row">-->
    <!--                    <div class="thumb" id="t1"></div>-->
    <!--                    <div class="thumb" id="t2"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t3"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t4"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t5"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t6"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t7"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t8"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t9"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t10"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb" id="t11"-->
    <!--                         ></div>-->
    <!--                    <div class="thumb blank" id="t12"-->
    <!--                    >-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <div class="row">
        <div class="columns small-12 large-12">
            <div class="columns m2" id="php">
                <h3>Le php et ses outils:</h3>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="columns small-12 medium-6 large-3 ">
                    <span
                            class="span-image"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_symfony.png')">
                    </span>
            <p class="m2">
                J'utilise le framework Symfony depuis la version deux et j'ai suivi les différentes évolutions
                jusqu'à la version actuelle (5)
            </p>
        </div>
        <div class="columns small-12 medium-6 large-3">
                    <span
                            class="span-image"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_laravel.png')">
                    </span>
            <p class="m2">Pour un de mes employeurs j'ai été amené à utiliser Laravel. J'ai ensuite réalisé de
                petits projet perso.</p>
        </div>
        <div class="columns small-12 medium-6 large-3">
                    <span
                            class="span-image"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_wordpress.png')">
                    </span>
            <p class="m2">Wordpress est le cms php peut-être le plus utilisé dans le monde professionnel. Il est
                impossible de passer à côté.
                Ce portfolio est propulsé par wordpress.</p>
        </div>
        <div class="columns small-12 medium-6 large-3">
                    <span
                            class="span-image"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_prestashop.png')">
                    </span>
            <p class="m2">
                Prestashop est le CMS E-Commerce incontournable.
            </p>
        </div>
        <div class="columns small-12 large-3">

        </div>
    </div>

    <div class="row m2">
        <div class="columns large-12">
            <p class="lead text-center">
                Mon evironnement de travail est <strong>Linux Ubuntu</strong>, j'utilise git pour la sauvegarde de mes
                projets,
                Twig avec Symfony, Blade avec Laravel, npm, yarn, gulp (sans être un expert).
                Mes frameworks css favoris sont <strong>Bootstrap</strong> ,<strong>Semantic UI</strong>, <strong>Foundation</strong>
            </p>
        </div>

    </div>

    <div class="row">
        <div class="columns small-12 large-12">
            <div class="columns m2" id="js">
                <h3>Le javascript est incontournable dans web moderne</h3>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="columns small-12 medium-6 large-2 large-offset-3 medium-offset-3 ">
                    <span
                            class="span-image"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_js.png')">
                    </span>
            <p class="m2">
                Le <strong>vanilla JS</strong> évolue sans cesse et est performant sans utiliser de librairie
            </p>
        </div>
        <div class="columns small-12 medium-6 large-2">
                    <span
                            class="span-image"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_jquery.png')">
                    </span>
            <p class="m2">
                <strong>jQuery</strong> est peut-être démodé mais tellement présent et utile pour ce qu'il fait
                qu'il faut connaitre cette libraire
            </p>
        </div>
        <div class="columns small-12 medium-2 large-2">
                    <span
                            class="span-image"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/logo_vuejs.png')">
                    </span>
            <p class="m2">
                <strong>Vue.js</strong> est l'un des frameworks les plus récents et les plus dynamiques.
            </p>
        </div>


    </div>



    <div class="row m2" style="background-color: rgba(225, 226, 227, .95) ;">
        <div class="columns small-12">
            <h3>Réalisations et démos</h3>
        </div>
        <div class="columns small-12 medium-6 large-4  site-parent"
             style="background-image: url(
                     '<?php echo get_template_directory_uri(); ?>/assets/img/sites/laclementine_00.png') ;">
            <div class="text-center site-child-1">
                <h3><a href="https://sandwicherie.jphnovitz.be">Sandwicherie</a></h3>
                <p>A
                    la base mon travaile de fin d'études et le site d'une
                    sandwhicherie de Saint-Nicolas (La Clémentine). Site réalisé avec <u>Symfony 4</u>.
                </p>
                <p>le code se trouve sur <a href="https://github.com/jphNovitz/sandwicherie">github</a></p>
            </div>
        </div>
        <div class="columns small-12 medium-6 large-8 ">
            <div class="row site-parent-row" style=" background-color: white ; height: 25vh ; ">
                <div class="columns small-12 medium-6 large-6 site-parent-secondary"
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
                </div>
                <div class="columns small-12 medium-6 large-6 site-parent-secondary "
                     style=" background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sites/flat.png') ;">
                    <div class="site-child-1">
                        <p>
                            <span class="lead-description"><a href="http://demos.jphnovitz.be/flat/">Flat demo page</a></span>
                            <br/>est une exercice sur
                            le 'flat design' réalisé en HTML.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row site-parent-row" style=" background-color: white ; height: 25vh ; ">

                <div class="columns small-12 medium-6 large-6 site-parent-secondary "
                     style=" background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sites/crearchitex.png');">
                    <div class="site-child-1">
                        <p>
                            <span class="lead-description"><a href="http://demos.jphnovitz.be/crearchitex/">Crearchitex demo page</a></span>
<!--                            est un site d'apprentissage du <u>html</u>, de <u>Symfony 2</u> et de la découpe design.-->
                        </p>
                    </div>
                </div>

                <div class="columns small-12 medium-6 large-6 site-parent-secondary "
                     style=" background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sites/allergens-basics.png') ;">
                    <div class="site-child-1">
                        <p>
                            <span class="lead-description"><a href="http://demos.jphnovitz.be/clementine-allergies/">alergene basic</a></span>
                            <!--                            est une démo Vue,js 2. La mise en relation entre des allergies et des aliments.-->
                            <br /><a href="https://jphnovitz.github.io/allergens-basic/">documentation </a> et code
                            <br /><a href="https://github.com/jphNovitz/allergens-basic">github</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--    <div class="row">-->
    <!---->
    <!--        <div class="columns m2" id="php">-->
    <div class="grid-x grid-padding-x">
        <div class="cell large-12">
            <h2>Expériences professionnelles</h2>
            <p>Junior est un point de départ, pour évoluer il faut des expériences professionnelles. Chacune des
                entreprises
                dans laquelle je suis passé m'a appris un tas de choses que ce soit au niveau d'une techno, d'un
                language, d'un logiciel,
                d'une organisation ou tout simplemenent au niveau humain.
                <br/>Merci à elles.</p>
        </div>

        <div class="cell medium-6 large-3">

            <div class="card ">
                <div class="card-divider text-center">
                    <h3 class="text-center">OnlyWeb</h3>
                </div>
                <div class="card-section">
                    <ul>
                        <li>9 mois en 2020</li>
                        <li>Symfony 4</li>
                        <li>jQuery</li>
                        <li>Websockets</li>
                    </ul>
                    <p><a href="https://onlyweb.be">Onlyweb.be</a></p>
                </div>
            </div>

        </div>

        <div class="cell medium-6 large-3">

            <div class="card ">
                <div class="card-divider">
                    <h3>Produweb</h3>
                </div>
                <div class="card-section">
                    <ul>
                        <li>3 mois en 2019</li>
                        <li>Prestashop</li>
                    </ul>
                    <p><a href="https://www.produweb.be">produweb.be</a></p>
                </div>
            </div>

        </div>
        <div class="cell medium-6 large-3">

            <div class="card text-center">
                <div class="card-divider">
                    <h3>La Clémentine</h3>
                </div>
                <div class="card-section">
                    <ul>
                        <li>9 mois en 2018</li>
                        <li>Symfony 5</li>
                        <li>Vue.js</li>
                        <li>Api Rest</li>
                    </ul>
                    <p><a href="http://laclementine.be">laclementine.be</a></p>
                </div>
            </div>

        </div>
        <div class="cell medium-6 large-3">

            <div class="card">
                <div class="card-divider">
                    <h3 class="text-center">LSIS</h3>
                </div>
                <div class="card-section">
                    <ul>
                        <li>3 mois en 2018</li>
                        <li>Laravel</li>
                        <li>Wordpress</li>
                        <li>jQuery</li>
                    </ul>
                    <p><a href="http://lsis.be">lsis.be</a></p>
                </div>
            </div>

        </div>
        <div class="cell medium-6 large-3">

            <div class="card">
                <div class="card-divider">
                    <h3>Newave</h3>
                </div>
                <div class="card-section">
                    <ul>
                        <li>Stage 2 mois en 2015</li>
                        <li>Wordpress</li>
                        <li>jQuery</li>
                        <li>Mobile First</li>
                    </ul>
                    <p><a href="http://www.newave.be">newave.be</a></p>
                </div>
            </div>

        </div>
    </div>
<?php
get_footer();
?>