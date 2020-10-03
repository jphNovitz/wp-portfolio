<?php
/**
 * file site-title.php
 * Title of the main site
 * This has to be included into header.php (no more no less)
 * author: Novitz Jean-Philippe <novitz@gmail.com>
 * date: 02-2019
 */
?>
<!--<div class="row" id="frontrow" >-->
<nav>
    <div class="title-bar small-margin-collapse" data-responsive-toggle="menu1" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="menu1"></button>
        <div class="title-bar-title"> Novitz Jean-Philippe</div>
    </div>

    <div class="top-bar" id="menu1">
        <div class="top-bar-left ">
            <ul class="dropdown vertical medium-horizontal  menu " data-dropdown-menu>
                <li class="menu-text">Développeur Web</li>
                <li><a href="/">Accueil</a></li>
                <li><a href="#">Compétences</a>
                    <ul class="menu">
                        <li style="background-color: #fff"><a href="/#php">PHP</a></li>
                        <li style="background-color: #fff"><a href="/#js">Javascript</a></li>
                    </ul>
                </li>
                <li><a href="#demos">Réalisation</a></li>
                <li><a href="#experience_pro">Expérience</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="row align-middle" id="intro">
    <div class="column small-12 large-12 text-center">
        <h2>Bienvenue</h2>
    </div>
    <div id="" class="columns small-12 large-6  text-center">
        <p class="lead">
            <?php echo(get_option('pitch')); ?>
        </p>

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
