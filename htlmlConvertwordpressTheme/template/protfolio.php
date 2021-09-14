<?php
// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Custom Posts', 'Post Type General Name', 'htmlconvetwordpresstheme' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'htmlconvetwordpresstheme' ),
		'menu_name' => _x( 'Custom Posts', 'Admin Menu text', 'htmlconvetwordpresstheme' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'htmlconvetwordpresstheme' ),
		'archives' => __( 'Portfolio Archives', 'htmlconvetwordpresstheme' ),
		'attributes' => __( 'Portfolio Attributes', 'htmlconvetwordpresstheme' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'htmlconvetwordpresstheme' ),
		'all_items' => __( 'All Custom Posts', 'htmlconvetwordpresstheme' ),
		'add_new_item' => __( 'Add New Portfolio', 'htmlconvetwordpresstheme' ),
		'add_new' => __( 'Add New', 'htmlconvetwordpresstheme' ),
		'new_item' => __( 'New Portfolio', 'htmlconvetwordpresstheme' ),
		'edit_item' => __( 'Edit Portfolio', 'htmlconvetwordpresstheme' ),
		'update_item' => __( 'Update Portfolio', 'htmlconvetwordpresstheme' ),
		'view_item' => __( 'View Portfolio', 'htmlconvetwordpresstheme' ),
		'view_items' => __( 'View Custom Posts', 'htmlconvetwordpresstheme' ),
		'search_items' => __( 'Search Portfolio', 'htmlconvetwordpresstheme' ),
		'not_found' => __( 'Not found', 'htmlconvetwordpresstheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'htmlconvetwordpresstheme' ),
		'featured_image' => __( 'Featured Image', 'htmlconvetwordpresstheme' ),
		'set_featured_image' => __( 'Set featured image', 'htmlconvetwordpresstheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'htmlconvetwordpresstheme' ),
		'use_featured_image' => __( 'Use as featured image', 'htmlconvetwordpresstheme' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'htmlconvetwordpresstheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'htmlconvetwordpresstheme' ),
		'items_list' => __( 'Custom Posts list', 'htmlconvetwordpresstheme' ),
		'items_list_navigation' => __( 'Custom Posts list navigation', 'htmlconvetwordpresstheme' ),
		'filter_items_list' => __( 'Filter Custom Posts list', 'htmlconvetwordpresstheme' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'htmlconvetwordpresstheme' ),
		'description' => __( '', 'htmlconvetwordpresstheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );


?>