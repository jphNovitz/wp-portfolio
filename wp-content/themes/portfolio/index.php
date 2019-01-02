<?php
    get_header();
?>

    <?php 
    /**
     * index page title
     * partials files are located in their own folder (_partials)
     * 
     */
            require_once(get_stylesheet_directory().'/_partials/_index-title.php');
    
     ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <?php 
                /**
                 * index page presentation 
                 * 
                 */
            
                    require_once(get_stylesheet_directory().'/_partials/_index-presentation.php'); 
                ?>
                
            </div>
            <div class="col-lg-8">
                <div class="sites-container">
                <?php 
                    /**
                     *  include slider whitch contains portfolio sites
                     */
                    require_once(get_stylesheet_directory().'/_partials/_index-sites.php');
                ?>
                
                <div class="col-lg-4 before-box">
                    <a class="btn btn-secondary btn-lg" href="#" id="move-left">
                        <i class="fa fa-fw fa-chevron-circle-left"></i>
                    </a>
                </div>
                <div class="col-lg-4 after-box"> 
                    <a class="btn btn-secondary btn-lg" href="#" id="move-right">
                        <i class="fa fa-fw fa-chevron-circle-right"></i>
                    </a>
                </div> 
            </div>
         </div>

        </div>
    </div>
<?php
    get_footer();
?>