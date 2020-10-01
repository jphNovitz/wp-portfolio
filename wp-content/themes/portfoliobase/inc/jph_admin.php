<?php
/*
 * @author Novitz Jean-Philippe <hello@jphnovitz.be>
 * @copyright 2020
 * =====================================
 * PORTFOLIO CONFIGURATION PAGE
 * ====================================
 *
 */

function jph_admin_page()
{

    add_menu_page('Portfolio Theme Options',
        'Portfolio configuration', //menu_title
        'manage_options', //capability
        'portfolio_configuration', //menu slug
        'portfolio_admin_main', //function
        '', //icon url
        110); //position
    add_submenu_page('portfolio_configuration',
        'Portfolio Theme Options', //menu_title
        'Portfolio configuration',
        'manage_options', //capability
        'portfolio_configuration', //menu slug
        'portfolio_admin_main'); //function
    add_submenu_page('portfolio_configuration',
        'Deuxième',
        'deuxieme',
        'manage_options',
        'manage_options',
        'portfolio_admin_deuxieme');
    add_action('admin_init', 'jph_admin_settings');
}

add_action('admin_menu', 'jph_admin_page');

function jph_admin_settings()
{
    register_setting('portfolio-configuration-group', 'pitch');
    add_settings_section('portfolio-configuration-pitch', 'Configuration', 'portfolio_configuration_pitch', 'portfolio_configuration');
    add_settings_field('portfolio-pitch', 'Pitch', 'introduction_pitch', 'portfolio_configuration', 'portfolio-configuration-pitch');

}

function portfolio_admin_main()
{
    require_once(get_template_directory() . '/inc/template/portfolio_configuration_general.php');
}

function introduction_pitch()
{
    $pitch = esc_attr__(get_option('pitch'));
    echo '<textarea name="pitch" rows="5" cols="50" >' . $pitch . '</textarea>';
}

function portfolio_admin_deuxieme()
{
    require_once(get_template_directory() . '/inc/template/portfolio_configuration_deuxieme.php');
}

function portfolio_configuration_pitch()
{
    echo 'Le pitch du portfolio';
}