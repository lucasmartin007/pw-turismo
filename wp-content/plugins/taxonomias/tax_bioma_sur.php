<?php

// Register Custom Taxonomy
// function custom_taxonomy() {
function taxonom_bioma_sur() {

	$labels = array(
		'name'                       => _x( 'Biomas del sur', 'Taxonomy General Name', 'bioma_sur' ),
		'singular_name'              => _x( 'Bioma', 'Taxonomy Singular Name', 'bioma_sur' ),
		'menu_name'                  => __( 'Biomas', 'bioma_sur' ),
		'all_items'                  => __( 'All Biomas', 'bioma_sur' ),
		'parent_item'                => __( 'Parent Bioma', 'bioma_sur' ),
		'parent_item_colon'          => __( 'Parent Bioma:', 'bioma_sur' ),
		'new_item_name'              => __( 'New Bioma Name', 'bioma_sur' ),
		'add_new_item'               => __( 'Add New Bioma', 'bioma_sur' ),
		'edit_item'                  => __( 'Edit Bioma', 'bioma_sur' ),
		'update_item'                => __( 'Update Bioma', 'bioma_sur' ),
		'view_item'                  => __( 'View Bioma', 'bioma_sur' ),
		'search_items'               => __( 'Search Biomas', 'bioma_sur' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,

        'rewrite'                    => array("slug" => "bioma-sur"),
	);
	register_taxonomy( 'bioma_sur', array( "sur" ), $args );

}
// add_action( 'init', 'taxonom_personalizada', 0 );

add_action( 'init', 'taxonom_bioma_sur');


?>