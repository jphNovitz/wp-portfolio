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
                <nav class="navbar navbar-light" style="background-color: #e3e3e3; color: #ee6f57;">
                    <div class="" >
                        <a class="navbar-brand" href="#">Welcome to my world</a> Welcome to my world 
                    </div>    
                </nav>    
            </div>
    </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <?php 
                        $query = new WP_Query(['post_type'=>'portfolio']);
                        if ($query->have_posts()):
                            while ($query->have_posts()): $query->the_post(); 
                    ?>
                            <div class="list-group-item list-group-item-action">
                                <?php
                                   echo '<a href="'.get_the_permalink().'">';
                                    echo get_the_title();
                                   echo '</a>'; 
                                ?>
                            </div>
                    <?php 
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>    
              
       
