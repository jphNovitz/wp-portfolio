<?php
/**
 * _index-presentation.php
 * author: Novitz Jean-Philippe <@jphNovitz>
 * display presentration -> pitch the portfolio
 * the_presentation function is defined in function.php file
 */
?>
<div class="presentation">
    <em> 
        <?php  echo the_presentation()['title']; ?> 
    </em>
    <p> 
        <?php echo the_presentation()['content']; ?> 
    </p>
</div>