<?php

/*
 * Styles
 */

if (!function_exists('base_enqueue_styles')) {
    function base_enqueue_styles()
    {
        // Ajout du fichier main.css dans le head
  //      wp_enqueue_style( 'style', get_stylesheet_uri() );
//        wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/css/main.css' );
        wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/css/app.css' );
//        wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/css/style.css' );
//        wp_enqueue_script('javascript', get_stylesheet_directory_uri().'/assets/js/main.js');
        wp_enqueue_script('what-input', get_stylesheet_directory_uri().'/foundation-portfolio/node_modules/what-input/dist/what-input.js', array(), null);
        wp_enqueue_script('foundation', get_stylesheet_directory_uri().'/foundation-portfolio/node_modules/foundation-sites/dist/js/foundation.js', array(), null);
//        wp_enqueue_script('javascript', get_stylesheet_directory_uri().'/assets/js/app.js');
        wp_enqueue_script('app', get_stylesheet_directory_uri().'/assets/js/app.js');

    }
    add_action('wp_enqueue_scripts', 'base_enqueue_styles');
}

add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');

function wpc_champs_personnalises_defaut($post_id)
 {
    if ( $_GET['post_type'] != 'page' ) {
        add_post_meta($post_id, 'url_link', '', true);
        add_post_meta($post_id, 'url_name', '', true);
 }
 return true;
}

add_action('the_presentation', 'the_presentation');
function the_presentation(){
    $page = get_post(32);
    return [
        'title' => $page->post_title,
        'content' => $page->post_content
    ];
       
}

?>