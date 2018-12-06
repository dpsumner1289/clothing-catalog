<?php
if ( ! function_exists('Dress') ) {

// Register Custom Post Type
function dresses() {

	$labels = array(
		'name'                  => _x( 'Dresses', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Dress', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Dresses', 'text_domain' ),
		'name_admin_bar'        => __( 'Dresses', 'text_domain' ),
		'archives'              => __( 'Dress Archives', 'text_domain' ),
		'attributes'            => __( 'Dress Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Dress:', 'text_domain' ),
		'all_items'             => __( 'All Dresses', 'text_domain' ),
		'add_new_item'          => __( 'Add New Dress', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Dress', 'text_domain' ),
		'edit_item'             => __( 'Edit Dress', 'text_domain' ),
		'update_item'           => __( 'Update Dress', 'text_domain' ),
		'view_item'             => __( 'View Dress', 'text_domain' ),
		'view_items'            => __( 'View Dresses', 'text_domain' ),
		'search_items'          => __( 'Search Dresses', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Dress Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set dress image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove dress image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as dress image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Dress', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Dress', 'text_domain' ),
		'items_list'            => __( 'Dress list', 'text_domain' ),
		'items_list_navigation' => __( 'Dress list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Dress list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Dress', 'text_domain' ),
		'description'           => __( 'Wedding Dresses', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		// 'taxonomies'            => array( 'Dress_category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => '/wp-content/themes/build-create-starter/assets/images/dress-favicon.png',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dress', $args );

}
add_action( 'init', 'dresses', 0 );

}