<?php
/*
Template Name: Posts del Sur del pais
*/

/*
Plugin Name: Plugin para publicar entradas del Sur
Plugin URI:
Description: Plugin que publica entradas del Sur para el proyecto
Version: 1.0
Author: Lucas
Author URI:
License:
*/

//Crear nueva entrada para posts
function custom_post_type_sur() {
 
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sur', 'Post Type General Name', 'tem_personalizado' ),
        'singular_name'       => _x( 'Sur', 'Post Type Singular Name', 'tem_personalizado' ),
        'menu_name'           => __( 'Sur', 'tem_personalizado' ),
        'parent_item_colon'   => __( 'Parent Sur', 'tem_personalizado' ),
        'all_items'           => __( 'All Sur', 'tem_personalizado' ),
        'view_item'           => __( 'View Sur', 'tem_personalizado' ),
        'add_new_item'        => __( 'Add New Sur', 'tem_personalizado' ),
        'add_new'             => __( 'Add New', 'tem_personalizado' ),
        'edit_item'           => __( 'Edit Sur', 'tem_personalizado' ),
        'update_item'         => __( 'Update Sur', 'tem_personalizado' ),
        'search_items'        => __( 'Search Sur', 'tem_personalizado' ),
        'not_found'           => __( 'Not Found', 'tem_personalizado' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'tem_personalizado' ),
    );
     
    // Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Sur', 'tem_personalizado' ),
        'description'         => __( 'Sur news and reviews', 'tem_personalizado' ),
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
        'rewrite'             => array("slug" => "sur"),
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'sur', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
// add_action( 'init', 'custom_post_type', 0 );
add_action( 'init', 'custom_post_type_sur');
/**/

include("taxonomias/tax_bioma_sur.php");

add_action( 'init', 'taxonom_bioma_sur');

?>