<?php

/*
Plugin Name: Novitz Jean-Philippe Portfolio Plugin
Plugin URI:  https://github.com/jphNovitz/wp-portfolio
Description: plugin for custom post design
Version:     1.0.0
Author:      Novitz Jean-Philippe
Author URI:  http://www.jphnovitz.be
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class Portfolio {

    public function __construct(){
        add_action('init', [$this, 'create_portfolio_custom_type']);
        add_action('add_meta_boxes', [$this, 'portfolio_boxes']);
    }

    public function activate(){


        flush_rewrite_rules();     
    }

    public function deactivate(){


        flush_rewrite_rules();
    }

    public function create_portfolio_custom_type(){
     
        $portfolio_labels = [
            'name' => 'Portfolio',
            'singular_name' => 'site',
            'menu_name' => 'Portfolio',
            'all_items' => 'tout',
            'most_used' => 'populaires',
            'edit_item' => 'Editer un site',
            'view_item' => 'apercu',
            'update_item' => 'modifier le site',
            'add_new_item' => 'Ajouter un site',
            'new_item_name' => 'Nom du site',
            'popular_items' => 'Les plus populaires',
            'separate_items_with_commas' => 'chacun est séparé d\'une virgule',
            'add_or_remove_items' => 'ajouter ou supprimer un élement',
            'choose_from_most_used' => 'les plus récents',
            'not_found' => 'non trouvé',
            'back_to_items' => 'retour'
        ];

        $author_args = [
            'hierarchical' => false,
            'labels' => $portfolio_labels,
            'show_ui' => true,
            'public' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'portfolio'],
        ];
        register_post_type('portfolio', $author_args);
   
    }

    public function portfolio_boxes(){
        add_meta_box('portfolio_url',
        'Url',
        [$this, 'set_portfolio_url_meta'],
        'portfolio',
        'side',
        'default'
        );

    }

    public function set_portfolio_url_meta(){
        
        echo '<h4>Url du site</h4>';
        echo '<input type="text" name="url_site" />';
        echo '<h4>Url du code (github)</h4>';
        echo '<input type="text" name="url_code" />';        
    }

    function save_metaboxes($post_ID){
        if(isset($_POST['url_site'])){
            update_post_meta($post_ID,'url_site', esc_html($_POST['url_site']));
        } 
        if(isset($_POST['url_code'])){
            update_post_meta($post_ID,'url_code', esc_html($_POST['url_code']));
        }
    }

}

if ( class_exists('Portfolio')){
    $portfolio = new Portfolio();
}


register_activation_hook(__FILE__, [$portfolio, 'activate']);
register_activation_hook(__FILE__, [$portfolio, 'deactivate']);
