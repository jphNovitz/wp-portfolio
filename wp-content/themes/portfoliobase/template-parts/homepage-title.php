<?php
/**
 * file site-title.php
 * Title of the main site
 * This has to be included into header.php (no more no less)
 * author: Novitz Jean-Philippe <novitz@gmail.com>
 * date: 02-2019
 */
?>
<div class="row" id="frontrow" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/jesus-kiteque-wn-KYaHwcis-unsplash-667.png');">

<div class="title-bar small-margin-collapse" data-responsive-toggle="menu1" data-hide-for="all">
    <button class="menu-icon" type="button" data-toggle="menu1"></button>
    <div class="title-bar-title"> Novitz Jean-Philippe </div>
</div>

<div class="top-bar" id="menu1">
    <div class="top-bar-left ">
        <ul class="dropdown vertical medium-horizontal  menu " data-dropdown-menu>
            <li class="menu-text">Développeur Web</li>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Compétences</a>
                <ul class="menu" >
                    <li><a href="/#php">PHP</a></li>
                    <li><a href="/#js">Javascript</a></li>
                </ul>
            </li>
            <li><a href="#">Expérience</a></li>
            <li><a href="#">Réalisation</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
<!--    <div class="top-bar-right">-->
<!--        <ul class="menu">-->
<!--            <li><a href="mailto:novitz@gmail.com"><i class="fas fa-at"></i></a></li>-->
<!--            <li><a href="https://www.linkedin.com/in/jean-philippe-novitz-777566161/"><i-->
<!--                        class="fab fa-linkedin"></i></a></li>-->
<!--            <li><a href="https://twitter.com/jphNovitz"><i class="fab fa-twitter"></i></a></li>-->
<!--            <li><a href="https://www.facebook.com/jphNovitz/"><i class="fab fa-facebook"></i></a></li>-->
<!--            <li><a href="https://www.instagram.com/jphNovitz/"><i class="fab fa-instagram"></i></a></li>-->
<!--        </ul>-->
<!--    </div>-->
</div>

    <div id="intro" class="columns small-12 large-10 large-offset-1 text-center">
        <h2>Bienvenue</h2>
        <p class="lead">
            Je suis un développeur WEB made in LIEGE, diplômé
            <br/> Formé à Symfony <span class="more-big">(2, 3, 4) </span> et Javascript <span class="more-big">(vanilla, jQuery) </span>
            j'ai ajouté <span class="more-big">des cordes à mon arc avec </span> VUE.JS LARAVEL, PRESTASHOP, <span
                class="more-big">aussi node et socket.io</span>.
            <span class="more-big"><br/>Si vous souhaiter utiliser ce que je sais ou si vous avez une autre corde pour moi.</span>
            Je suis disponible Immédiatement.
        </p>

    </div>
</div>
