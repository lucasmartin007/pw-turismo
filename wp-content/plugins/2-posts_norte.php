<?php
/*
Template Name: Posts del norte del pais
*/

/*
Plugin Name: Plugin para publicar entradas del norte
Plugin URI:
Description: Plugin que publica entradas del norte para el proyecto
Version: 1.0
Author: Lucas
Author URI:
License:
*/

//Crear nueva entrada para posts
function custom_post_type_norte() {
 
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Norte', 'Post Type General Name', 'tem_personalizado' ),
        'singular_name'       => _x( 'Norte', 'Post Type Singular Name', 'tem_personalizado' ),
        'menu_name'           => __( 'Norte', 'tem_personalizado' ),
        'parent_item_colon'   => __( 'Parent Norte', 'tem_personalizado' ),
        'all_items'           => __( 'All Norte', 'tem_personalizado' ),
        'view_item'           => __( 'View Norte', 'tem_personalizado' ),
        'add_new_item'        => __( 'Add New Norte', 'tem_personalizado' ),
        'add_new'             => __( 'Add New', 'tem_personalizado' ),
        'edit_item'           => __( 'Edit Norte', 'tem_personalizado' ),
        'update_item'         => __( 'Update Norte', 'tem_personalizado' ),
        'search_items'        => __( 'Search Norte', 'tem_personalizado' ),
        'not_found'           => __( 'Not Found', 'tem_personalizado' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'tem_personalizado' ),
    );
     
    // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Norte', 'tem_personalizado' ),
        'description'         => __( 'Norte news and reviews', 'tem_personalizado' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'bioma' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'rewrite'             => array("slug" => "norte"),
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'norte', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
// add_action( 'init', 'custom_post_type', 0 );
add_action( 'init', 'custom_post_type_norte');
/**/

include("taxonomias/tax_bioma_norte.php");

add_action( 'init', 'taxonom_bioma_norte');

?>