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
        wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/app.css');
        wp_enqueue_style('webicons', get_stylesheet_directory_uri() . '/assets/webicons.css');
        wp_enqueue_style('ficons', get_stylesheet_directory_uri() . '/assets/foundation-icons.css');
//        wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/css/style.css' );     
        wp_enqueue_script('jquery', get_stylesheet_directory_uri() . './foundation-portfolio/node_modules/jquery/dist/jquery.min.js', [], true, false);  
    
        wp_enqueue_script('javascript', get_stylesheet_directory_uri() . '/assets/js/main.js', [], true, true);
        wp_enqueue_script('what-input', get_stylesheet_directory_uri() . '/foundation-portfolio/node_modules/what-input/dist/what-input.min.js', array(), true, true);
        wp_enqueue_script('foundation', get_stylesheet_directory_uri() . '/foundation-portfolio/node_modules/foundation-sites/dist/js/foundation.js', array(), true, true);
//        wp_enqueue_script('javascript', get_stylesheet_directory_uri().'/assets/js/app.js');
        wp_enqueue_script('app', get_stylesheet_directory_uri() . '/assets/js/app.js');
        //puzzle
        wp_enqueue_style('puzzlestyle', get_stylesheet_directory_uri() . '/assets/css/puzzle/puzzle.css', [], false, false);
        wp_enqueue_script('puzzle', get_stylesheet_directory_uri() . '/assets/js/puzzle/puzzle.js', [], true, true);
        wp_enqueue_script('modernizer', get_stylesheet_directory_uri() . '/assets/js/modernizr-custom.js', [], true, true);
        //

    }

    add_action('wp_enqueue_scripts', 'base_enqueue_styles');
    add_filter('style_loader_tag', 'my_style_loader_tag_filter');


}

add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');


function wpc_champs_personnalises_defaut($post_id)
{
    if ($_GET['post_type'] != 'page') {
        add_post_meta($post_id, 'url_link', '', true);
        add_post_meta($post_id, 'url_name', '', true);
    }
    return true;
}

add_action('the_presentation', 'the_presentation');
function the_presentation()
{
    $page = get_post(32);
    return [
        'title' => $page->post_title,
        'content' => $page->post_content
    ];

}

 add_theme_support( 'post-thumbnails');
 add_theme_support( 'thumbnails');


require get_template_directory() . '/inc/jph_admin.php';
?>