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
        add_action('init', [$this, 'portfolio_taxonomy']);
        add_action('init', [$this, 'create_portfolio_custom_type']);
        add_post_type_support('portfolio', array('page', 'excerpt')); // excerpt are disable by default
        add_action('init', [$this, 'add_fields_portfolio']);
        add_action('add_meta_boxes', [$this, 'portfolio_boxes']);
        add_action('save_post', [$this, 'save_metaboxes']);
    }

    public function activate(){

        flush_rewrite_rules();     
    }

    public function deactivate(){


        flush_rewrite_rules();
    }

    public function portfolio_taxonomy()
    {
        $labels_language = [
            'name' => 'Langages',
            'singular_name' => 'Langage',
            'parent_item'=>'langage parent',
            'menu_name' => 'Langage',
            'all_items' => 'tous',
            'most_used' => 'populaires',
            'edit_item' => 'Editer un langage',
            'view_item' => 'apercu',
            'update_item' => 'modifier langage',
            'add_new_item' => 'ajouter',
            'new_item_name' => 'Nom',
            'popular_items' => 'Les plus populaires',
            'separate_items_with_commas' => 'chacun est séparé d\'une virgule',
            'add_or_remove_items' => 'ajouter ou supprimer un élement',
            'choose_from_most_used' => 'les plus utilisés',
            'not_found' => 'non trouvé',
            'back_to_items' => 'retour'
        ];
        $args_language = [
            'hierarchical' => true,
            'labels' => $labels_language,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'langage'],
        ];

        $labels_techno = [
            'name' => 'Techno',
            'singular_name' => 'Techno',
            'parent_item'=>'Techno parente',
            'menu_name' => 'Techno',
            'all_items' => 'tous',
            'most_used' => 'populaires',
            'edit_item' => 'Editer une  techno',
            'view_item' => 'apercu',
            'update_item' => 'modifier techno',
            'add_new_item' => 'ajouter',
            'new_item_name' => 'Nom',
            'popular_items' => 'Les plus populaires',
            'separate_items_with_commas' => 'chacun est séparé d\'une virgule',
            'add_or_remove_items' => 'ajouter ou supprimer un élement',
            'choose_from_most_used' => 'les plus utilisés',
            'not_found' => 'non trouvé',
            'back_to_items' => 'retour'
        ];
        $args_techno = [
            'hierarchical' => true,
            'labels' => $labels_techno,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'techno'],
        ];


        register_taxonomy('langage', ['portfolio'], $args_language);
        register_taxonomy('techno', ['portfolio'], $args_techno);
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
    
      function add_fields_portfolio(){
         
        if ($_GET['post_type'] == 'portfolio') {
            update_post_meta($post_id, 'portfolio_url', '', true);
        }  
        if ($_GET['post_type'] == 'portfolio') {
            update_post_meta($post_id, 'portfolio_url_git', '', true);
        }  
        if ($_GET['post_type'] == 'portfolio') {
            update_post_meta($post_id, 'portfolio_difficulty', '', true);
        }
        // var_dump(get_post_meta());
        // var_dump($_GET['post_type']);die();

        return true;
    } 


    /* metaboxes creation -> one different box by theme   */
    public function portfolio_boxes(){
        add_meta_box('portfolio_url',
        'Url',
        [$this, 'set_portfolio_url_meta'],
        'portfolio',
        'side',
        'high'
        );

        add_meta_box('portfolio_git',
        'github',
        [$this, 'set_portfolio_url_git_meta'],
        'portfolio',
        'side',
        'low'
        );

        add_meta_box('portfolio_difficulty',
        'difficulté',
        [$this, 'set_portfolio_difficulty_meta'],
        'portfolio',
        'side',
        'low'
        );  

    }

    /* metaboxes views / visualisation */
    public function set_portfolio_url_meta($post){
        $url_site = get_post_meta($post->ID, 'portfolio_url', true);
        echo '<pre>';//var_dump(get_post_meta($post->ID));echo '</pre>'; //die();
        //var_dump(get_post_meta($url_site)); die();
       // echo '<h4>Url du site</h4>';
        echo '<input type="text" name="portfolio_url" value="'.$url_site.'" />';
    }
    public function set_portfolio_url_git_meta($post){
        $url_git = get_post_meta($post->ID, 'portfolio_url_git', true);
        //echo '<h4>Url du code (github)</h4>';
        echo '<input type="text" name="portfolio_url_git" value="'.$url_git.'" />';        
    }

    public function set_portfolio_difficulty_meta($post){
        $difficulty = (int)get_post_meta($post->ID, 'portfolio_difficulty', true);
        echo '<select name="portfolio_difficulty">';
            echo '<option value="0" '.$this->getDifficulty($difficulty, 0). '> 0 </option>';
            echo '<option value="1" '.$this->getDifficulty($difficulty, 1). '> * </option>';
            echo '<option value="2" '.$this->getDifficulty($difficulty, 2). '> ** </option>';
            echo '<option value="3" '.$this->getDifficulty($difficulty, 3). '> *** </option>';
            echo '<option value="4" '.$this->getDifficulty($difficulty, 4). '> **** </option>';
            echo '<option value="5" '.$this->getDifficulty($difficulty, 5).' > ***** </option>';
        echo '</select>';
    }

    public function getDifficulty(Int $dif, Int $number){
        if ($dif == $number) { 
            return 'selected="selected"';
        } else {
            return 'a';
        }
    }

    

    function save_metaboxes($post_ID){
        if(isset($_POST['portfolio_url'])){
            update_post_meta($post_ID,'portfolio_url', esc_html($_POST['portfolio_url']));
        } 
        if(isset($_POST['portfolio_url_git'])){ 
            update_post_meta($post_ID,'portfolio_url_git', esc_html($_POST['portfolio_url_git']));
        }
        if(isset($_POST['portfolio_difficulty'])){
            update_post_meta($post_ID,'portfolio_difficulty', esc_html($_POST['portfolio_difficulty']));
        }
    }
   

}

if ( class_exists('Portfolio')){
    $portfolio = new Portfolio();
}


register_activation_hook(__FILE__, [$portfolio, 'activate']);
register_activation_hook(__FILE__, [$portfolio, 'deactivate']);