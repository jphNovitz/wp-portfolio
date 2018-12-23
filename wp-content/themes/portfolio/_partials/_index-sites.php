<div class="trick">
    <div class="sites-items">
        <?php
            while(have_posts()){
                the_post();
        ?>        
            <div  class='sites-item' >
                <h2> <?php  the_title(); ?> </h2>
                <p>
                    <?php 
                        the_content();
                        $url_name = get_post_meta($post->ID, url_name, true);
                        $url_link = get_post_meta($post->ID, url_link, true);
                    ?>
                    <br /> <a href='<?php $post_link ?>'><?php $url_name ?></a>
                    <br /><?php the_tags(); ?>
                </p>
            </div>
            <?php } ?>
    </div>
</div>  