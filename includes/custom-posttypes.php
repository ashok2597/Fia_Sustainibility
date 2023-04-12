<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Register Custom Post Types
 */
function fia_register_post_types() {

    $product_labels = array(
                            'name'               => _x( 'Products', 'fia_product', 'fia' ),
                            'singular_name'      => _x( 'Product', 'fia_product', 'fia' ),
                            'menu_name'          => _x( 'Products', 'fia_product', 'fia' ),
                            'name_admin_bar'     => _x( 'Products', 'fia_product', 'fia' ),
                            'add_new'            => _x( 'Add New', 'fia_product', 'fia' ),
                            'add_new_item'       => __( 'Add New Product', 'fia' ),
                            'new_item'           => __( 'New Product', 'fia' ),
                            'edit_item'          => __( 'Edit Product', 'fia' ),
                            'view_item'          => __( 'View Product', 'fia' ),
                            'all_items'          => __( 'All Products', 'fia' ),
                            'search_items'       => __( 'Search Product', 'fia' ),
                            'parent_item_colon'  => __( 'Parent Product:', 'fia' ),
                            'not_found'          => __( 'No products found.', 'fia' ),
                            'not_found_in_trash' => __( 'No products found in Trash.', 'fia' ),
                        );

    $product_args = array(
                            'labels'             => $product_labels,
                            'public'             => true,
                            'publicly_queryable' => true,
                            'show_ui'            => true,
                            'show_in_menu'       => true,
                            'query_var'          => true,
                            'rewrite'            => array( 'slug'=> 'products', 'with_front' => false ),
                            'capability_type'    => 'post',
                            'has_archive'        => false,
                            'hierarchical'       => false,
                            'menu_position'      => null,
                            'menu_icon'          => 'dashicons-pressthis',
                            'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' )
                        );

    //register_post_type( FIA_PRODUCT_POST_TYPE, $product_args );
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
                    'name'              => _x( 'Categories', 'taxonomy general name', 'fia'),
                    'singular_name'     => _x( 'Category', 'taxonomy singular name','fia' ),
                    'search_items'      => __( 'Search Categories','fia' ),
                    'all_items'         => __( 'All Categories','fia' ),
                    'parent_item'       => __( 'Parent Category','fia' ),
                    'parent_item_colon' => __( 'Parent Category:','fia' ),
                    'edit_item'         => __( 'Edit Category' ,'fia'), 
                    'update_item'       => __( 'Update Category' ,'fia'),
                    'add_new_item'      => __( 'Add New Category' ,'fia'),
                    'new_item_name'     => __( 'New Category Name' ,'fia'),
                    'menu_name'         => __( 'Categories' ,'fia')
                );

    $args = array(
                    'hierarchical'      => true,
                    'labels'            => $labels,
                    'show_ui'           => true,
                    'show_admin_column' => true,
                    'query_var'         => true,
                    'rewrite'           => array( 'slug'=> 'product' )
                );
	
    //register_taxonomy( FIA_PRODUCT_POST_TAX, FIA_PRODUCT_POST_TYPE, $args );
    
    //flush rewrite rules
    flush_rewrite_rules();
}

//add action to create custom post type
add_action( 'init', 'fia_register_post_types' );
?>