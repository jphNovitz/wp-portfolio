<?php
/**
 * file single-portfolio.php
 * Content of a portfolio site
 * author: Novitz Jean-Philippe <novitz@gmail.com>
 * date: 02-2019
 */
?>

<?php
/**
 *  the header contains the left navbar
 */
?>
<?php
    get_header();
?>


<?php
/**
 *  the 'single' template part is the real content of the page
 */
?>

<?php
    get_template_part('template-parts/portfolio/single');
?>

<?php
    get_footer();
?>