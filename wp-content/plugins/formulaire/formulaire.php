<?php
/*
Plugin Name: Formulaire
Description: Un plugin pour gérer vos formulaire
Version: 0.1
Author: BOUFARA Aziz
License: GPL2
*/

// include_once("fromdb.php");

function theme_w3_toheader() {
    echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
}
add_action('wp_head', 'theme_w3_toheader');


add_shortcode('formulaire_form', 'formulaire_form');
function formulos_form($atts, $content){
    include_once("fromdb.php");
    $atts = shortcode_atts( array(
        'method' => 'POST',
        'action' => get_site_url().'/wp-content/plugins/formulaire/formulaire.php'
    ), $atts );

    $method = $atts['method'];
    $action = $atts['action'];

    return "<form method='$method' action='".get_site_url()."/wp-content/plugins/formulaire/$action'>".do_shortcode($content)."</form>";
}



add_shortcode('formulaire_input', 'formulaire_input');
function formulaire_input($atts){
    $atts = shortcode_atts( array(
        'label' => 'name',
        'type' => 'text'
    ), $atts );

    $labelName = $atts['label'];
    $type = $atts['type'];

    return "<label>$labelName<input class='w3-input' type='$type' name='formulaire_$labelName'/></label>";
}



add_shortcode('formulaire_submit', 'formulaire_submit');
function formulaire_submit($atts){
    $atts = shortcode_atts( array(
        'value' => 'Valider',
    ), $atts );

    $value = $atts['value'];

    return "<input class='w3-input' type='submit' value='$value' />";
}

add_shortcode('formulaire_button', 'formulaire_button');
function formulaire_button($atts){
    $atts = shortcode_atts( array(
        'value' => 'name',
        'color' => 'white'
    ), $atts );

    $color = $atts['color'];
    $value = $atts['value'];

    return "<button class='w3-btn w3-$color' >$value</button>";
}