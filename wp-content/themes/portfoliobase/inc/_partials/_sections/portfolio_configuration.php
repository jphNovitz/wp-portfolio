<?php
/**
 *  -- partials --
 * @package jphNovitz_cta
 * @author Novitz Jean-Philippe <hello@jphnovitz.be>
 * @copyright 2020-2021
 */

add_action('admin_menu', 'jph_configuration');

function jph_configuration()
{
    add_settings_section('jph-configuration-group', 'Présentation', 'jph_configuration_text', 'configuration');
    register_setting('jph-configuration-group', 'configuration');
//
//    register_setting('cta-introduction-group', 'introduction_title');
//    register_setting('cta-introduction-group', 'introduction_text');
//
//    add_settings_field('introduction_title', 'Titre ', 'introduction_title', 'introduction', 'cta-introduction-group');
//    add_settings_field('$introduction_text', 'Présentation', 'introduction_text', 'introduction', 'cta-introduction-group');
}

function jph_configuration_page()
{
    require_once(get_template_directory() . '/inc/template/admin/settings/configuration.php');
}

/*
 * callback functions
 */
function jph_configuration_text()
{
    // general page text
    echo "<p>Texte de présentation</p>";
}

//// generates the title input
//function configuration_title()
//{
//    $configuration_title = esc_attr(get_option('configuration_title'));
//    echo '<input type="text" name="configuration_title" id="configuration_title" value="' . $configuration_title . '" size="80" />';
//    echo '<p>Titre qui s\'affichera sur votre page d\'accueil.</p>';
//}

//// generates the title input
//function introduction_text()
//{
//    $introduction_text = esc_attr(get_option('introduction_text'));
//    echo '<textarea  name="introduction_text" id="introduction_text"
//            rows="10" cols="80">'. $introduction_text.'</textarea>';
//    echo '<p>Présentez et décrivez votre établissement.</p>';
//}
