<?php
// Dress Types
function dresstype() {

	$labels = array(
		'name'                       => _x( 'Dress Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Dress Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Dress Types', 'text_domain' ),
		'all_items'                  => __( 'All Dress Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Dress Type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Dress Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Dress Type', 'text_domain' ),
		'update_item'                => __( 'Update Dress Type', 'text_domain' ),
		'view_item'                  => __( 'View Dress Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Dress Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Dress Types', 'text_domain' ),
		'search_items'               => __( 'Search Dress Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Dress Types', 'text_domain' ),
		'items_list'                 => __( 'Dress Type list', 'text_domain' ),
		'items_list_navigation'      => __( 'Dress Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'has_archive'           	 => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
	);
	register_taxonomy( 'dress_type', array( 'dress' ), $args );
}
add_action( 'init', 'dresstype', 0 );

// Designer
function designerinit() {

	$labels = array(
		'name'                       => _x( 'Designers', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Designer', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Designers', 'text_domain' ),
		'all_items'                  => __( 'All Designers', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Designer Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Designer', 'text_domain' ),
		'edit_item'                  => __( 'Edit Designer', 'text_domain' ),
		'update_item'                => __( 'Update Designer', 'text_domain' ),
		'view_item'                  => __( 'View Designer', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Designers with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Designer', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Designers', 'text_domain' ),
		'popular_items'              => __( 'Popular Designer', 'text_domain' ),
		'search_items'               => __( 'Search Designer', 'text_domain' ),
		'not_found'                  => __( 'Designer Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Designers', 'text_domain' ),
		'items_list'                 => __( 'Designer list', 'text_domain' ),
		'items_list_navigation'      => __( 'Designer list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'has_archive'           	 => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
	);
	register_taxonomy( 'designers', array( 'dress' ), $args );
}
add_action( 'init', 'designerinit', 0 );

// Budgets
function budgetinit() {

    $labels = array(
        'name'                       => _x( 'Budgets', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Budget', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Budgets', 'text_domain' ),
        'all_items'                  => __( 'All Budgets', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Budget Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Budget', 'text_domain' ),
        'edit_item'                  => __( 'Edit Budget', 'text_domain' ),
        'update_item'                => __( 'Update Budget', 'text_domain' ),
        'view_item'                  => __( 'View Budget', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Budgets with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Budget', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Budgets', 'text_domain' ),
        'popular_items'              => __( 'Popular Budget', 'text_domain' ),
        'search_items'               => __( 'Search Budget', 'text_domain' ),
        'not_found'                  => __( 'Budget Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No Budgets', 'text_domain' ),
        'items_list'                 => __( 'Budget list', 'text_domain' ),
        'items_list_navigation'      => __( 'Budget list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'has_archive'           	 => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
    );
    register_taxonomy( 'budget', array( 'dress' ), $args );
}
add_action( 'init', 'budgetinit', 0 );

// Types
function typeinit() {

    $labels = array(
        'name'                       => _x( 'Types', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Types', 'text_domain' ),
        'all_items'                  => __( 'All Types', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Type Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Type', 'text_domain' ),
        'edit_item'                  => __( 'Edit Type', 'text_domain' ),
        'update_item'                => __( 'Update Type', 'text_domain' ),
        'view_item'                  => __( 'View Type', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Types with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Type', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Types', 'text_domain' ),
        'popular_items'              => __( 'Popular Type', 'text_domain' ),
        'search_items'               => __( 'Search Type', 'text_domain' ),
        'not_found'                  => __( 'Type Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No Types', 'text_domain' ),
        'items_list'                 => __( 'Type list', 'text_domain' ),
        'items_list_navigation'      => __( 'Type list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'has_archive'           	 => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
    );
    register_taxonomy( 'type', array( 'dress' ), $args );
    
}
add_action( 'init', 'typeinit', 0 );

// Fabric
function fabricinit() {

    $labels = array(
        'name'                       => _x( 'Fabrics', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Fabric', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Fabrics', 'text_domain' ),
        'all_items'                  => __( 'All Fabrics', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Fabric Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Fabric', 'text_domain' ),
        'edit_item'                  => __( 'Edit Fabric', 'text_domain' ),
        'update_item'                => __( 'Update Fabric', 'text_domain' ),
        'view_item'                  => __( 'View Fabric', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Fabrics with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Fabric', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Fabrics', 'text_domain' ),
        'popular_items'              => __( 'Popular Fabric', 'text_domain' ),
        'search_items'               => __( 'Search Fabric', 'text_domain' ),
        'not_found'                  => __( 'Fabric Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No Fabrics', 'text_domain' ),
        'items_list'                 => __( 'Fabric list', 'text_domain' ),
        'items_list_navigation'      => __( 'Fabric list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'has_archive'           	 => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
    );
    register_taxonomy( 'fabric', array( 'dress' ), $args );
    
}
add_action( 'init', 'fabricinit', 0 );

// Special Tyopes
function specialcatinit() {

    $labels = array(
        'name'                       => _x( 'Special Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Special Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Special Categories', 'text_domain' ),
        'all_items'                  => __( 'All Special Categories', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Special Category Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Special Category', 'text_domain' ),
        'edit_item'                  => __( 'Edit Special Category', 'text_domain' ),
        'update_item'                => __( 'Update Special Category', 'text_domain' ),
        'view_item'                  => __( 'View Special Category', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Special Categories with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Special Category', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Special Categories', 'text_domain' ),
        'popular_items'              => __( 'Popular Special Category', 'text_domain' ),
        'search_items'               => __( 'Search Special Category', 'text_domain' ),
        'not_found'                  => __( 'Special Category Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No Special Categories', 'text_domain' ),
        'items_list'                 => __( 'Special Category list', 'text_domain' ),
        'items_list_navigation'      => __( 'Special Category list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'has_archive'           	 => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
    );
    register_taxonomy( 'special_category', array( 'dress' ), $args );
}
add_action( 'init', 'specialcatinit', 0 );