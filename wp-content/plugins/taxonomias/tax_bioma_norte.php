<?php

// Register Custom Taxonomy
// function custom_taxonomy() {
function taxonom_bioma_norte() {

	$labels = array(
		'name'                       => _x( 'Biomas del norte', 'Taxonomy General Name', 'bioma_norte' ),
		'singular_name'              => _x( 'Bioma', 'Taxonomy Singular Name', 'bioma_norte' ),
		'menu_name'                  => __( 'Biomas', 'bioma_norte' ),
		'all_items'                  => __( 'All Biomas', 'bioma_norte' ),
		'parent_item'                => __( 'Parent Bioma', 'bioma_norte' ),
		'parent_item_colon'          => __( 'Parent Bioma:', 'bioma_norte' ),
		'new_item_name'              => __( 'New Bioma Name', 'bioma_norte' ),
		'add_new_item'               => __( 'Add New Bioma', 'bioma_norte' ),
		'edit_item'                  => __( 'Edit Bioma', 'bioma_norte' ),
		'update_item'                => __( 'Update Bioma', 'bioma_norte' ),
		'view_item'                  => __( 'View Bioma', 'bioma_norte' ),
		'search_items'               => __( 'Search Biomas', 'bioma_norte' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,

        'rewrite'                    => array("slug" => "bioma-norte"),
	);
	register_taxonomy( 'bioma_norte', array( "norte" ), $args );

}
// add_action( 'init', 'taxonom_personalizada', 0 );

add_action( 'init', 'taxonom_bioma_norte');


?>