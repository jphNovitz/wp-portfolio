<?php
    get_header();
?>
 <div id="sites-content">
    <div class="sites"> 
    <?php 
    /**
     * index page title
     * partials files are located in their own folder (_partials)
     * 
     */
            require_once(get_stylesheet_directory().'/_partials/_index-title.php');
    /**
     * index page presentation 
     * 
     */
            
            require_once(get_stylesheet_directory().'/_partials/_index-presentation.php');
     ?>
    </div>
    <div class="content-right">
    <?php 
          /**
           *  include slider whitch contains portfolio sites
           */
          require_once(get_stylesheet_directory().'/_partials/_index-sites.php');
        ?>
    </div>
<?php
    get_footer();
?>