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
        <div class="box">
            <div id="move-left"> << </div>
            <?php 
                /**
                 *  include slider whitch contains portfolio sites
                 */
                require_once(get_stylesheet_directory().'/_partials/_index-sites.php');
            ?>
            <div id="move-right"> >> </div>
        </div>
    </div>
<?php
    get_footer();
?>