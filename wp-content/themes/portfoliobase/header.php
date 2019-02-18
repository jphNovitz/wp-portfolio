<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Developper Novitz Jean-PHilippe</title>
    <meta name="description" content="Novitz Jean-Philippe développeur web php utilisant le cms worpress et le framework
    symfony.  Javascript soit Vanilla Javascript, librairie jQuery ou framework vuejs." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <?php  wp_head(); ?>    
    <script src="main.js"></script>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
            <div class="col-lg-12">
                <?php get_template_part('template-parts/site-title'); ?> 
            </div>
    </div>
        <div class="row">
            <div class="col-lg-3">
                <?php get_template_part('template-parts/nav-left'); ?>
            </div>    

            <?php 
                /**
                 * Here above, the 'get_template_part' includes are not necessary
                 * It just give me some space, some air and makes my code more readable
                 * Those are parts are tiny and more easy to maintain
                 * AND I DO WHAT I WANT !
                 */
            ?>
              
       
