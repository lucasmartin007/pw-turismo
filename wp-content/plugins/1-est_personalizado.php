<?php
/*
Plugin Name: Plugin de estilos
Plugin URI:
Description: Plugin de estilos para el proyecto
Version: 1.0
Author: Lucas
Author URI:
License:
*/

//Incorporar una hoja de estilos al activar un plugin
function estilos_personales(){
    //wp_register_style("estilos_personales", get_template_directory_uri() . "/css/personalizado/estilos_personalizados.css", array(), "1.0");
    // wp_register_style("estilos_personales", "/wp-content/themes/tem_personalizado/assets/css/personalizado/est_personalizado.css", array(), "1.0");
    wp_register_style("estilos_personales", get_template_directory_uri() . "/assets/css/personalizado/est_personalizado.css", array(), "1.0");
    wp_enqueue_style("estilos_personales");
}

add_action("wp_enqueue_scripts", "estilos_personales");

