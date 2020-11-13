<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Developpeur web Novitz Jean-PHilippe - Liège</title>
    <meta name="description" content="Développeur web réalise votre site internet.  Site vitrine, site ecommerce, association ou mvp de de votre projet. J'utilise les technologies php et javascript.  " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

   <!--  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous">
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js">
    </script>
<!--    <script type='text/javascript' src='http://localhost:8080/wp-content/themes/portfoliobase/assets/js/app.js'></script>-->


    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   
    <?php  wp_head(); ?>    

</head>

<body>
<?php

get_template_part('template-parts/nav/nav');
if (is_front_page()) get_template_part('template-parts/homepage-title');
//else get_template_part('template-parts/site-title');?>
<?php //get_template_part('template-parts/nav-left'); ?>

       
