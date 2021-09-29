<?php
/*
Plugin Name: certification
Description: un plugin dvpt par Nathanaël LEFORT
Version: 1.0
Author: Nathanael
*/

add_shortcode( 'certification', 'certification_shortcode' );

if (!function_exists('certification_shortcode' ) ) {

    function certification_shortcode() {

        $text = '<div class="plugin_certification">';
        $text .= '<p>Le tablier jean est un produit phare de notre entreprise !</p>';
        $text .= '<p>Profitez dès maintenant de ce produit populaire</p>';
        $text .= '<p>Pour une modique somme de 2€ !</p>';
        $text .= '<a href="https://ecommerce.nathanaellefort-webmaster.fr/produit/tablier/" class="cta">Découvrir maintenant</a>';
        $text .= '</div>';

        return $text;
    }
}