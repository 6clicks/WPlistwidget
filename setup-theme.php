<?php
/**
 * Plugin Name: Tutorials Installation du theme Snow.
 * Plugin URI: https://www.925.ch
 * Description:  La liste des vidéos tutotial pour la gestion du site
 * Version:  1.0
 * Author: John Robert-Nicoud
 * Author URI: https://www.925.ch
 * License: A "Slug" license name e.g. GPL2
 */
 
 add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Tutotials WordPress', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '
<img src="https://wp2.ch/logo/wp2-logo.png" width="120px">
<h2>tutoriel utiliser votre site</h2>
<ol>
<li> une fois que vous maitriser votre site vous pouvez masquer cette fenêtre avec les option d\'écrant</li>
<li> tour d\'horison de l\'admin: <a href="https://wp2.ch/tuto/video1.mov" target="_blanc">télécharger ce fichier </a> </li>
<li> crée une page: <a href="https://wp2.ch/tuto/video2.mov" target="_blanc">télécharger ce fichier </a> </li>
<li> Importer un image: <a href="https://wp2.ch/tuto/video3.mov" target="_blanc">télécharger ce fichier </a> </li>
<li> modifier un lien: <a href="https://wp2.ch/tuto/video4.mov" target="_blanc">télécharger ce fichier </a> </li>

</ol>
<br>
';
}