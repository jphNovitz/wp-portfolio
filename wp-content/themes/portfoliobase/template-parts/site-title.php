<?php
/**
 * file site-title.php
 * Title of the main site
 * This has to be included into header.php (no more no less)
 * author: Novitz Jean-Philippe <novitz@gmail.com>
 * date: 02-2019
 */
?>


<div class="title-bar" data-responsive-toggle="menu1" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="menu1"></button>
    <div class="title-bar-title">jphNovitz</div>
</div>

<div class="top-bar" id="menu1">
    <div class="top-bar-left ">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">jphNovitz</li>
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
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="mailto:novitz@gmail.com"><i class="fas fa-at"></i></a></li>
            <li><a href="https://www.linkedin.com/in/jean-philippe-novitz-777566161/"><i
                            class="fab fa-linkedin"></i></a></li>
            <li><a href="https://twitter.com/jphNovitz"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/jphNovitz/"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/jphNovitz/"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</div>
