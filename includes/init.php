<?php

function recipe_init(){

	 $labels = array(
        'name'                  => _x( 'Beyond Recipes', 'Post type general name', 'beyond-recipe' ),
        'singular_name'         => _x( 'Beyond Recipe', 'Post type singular name', 'beyond-recipe' ),
        'menu_name'             => _x( 'Beyond Recipes', 'Admin Menu text', 'beyond-recipe' ),
        'name_admin_bar'        => _x( 'Beyond Recipe', 'Add New on Toolbar', 'beyond-recipe' ),
        'add_new'               => __( 'Add New', 'beyond-recipe' ),
        'add_new_item'          => __( 'Add New recipe', 'beyond-recipe' ),
        'new_item'              => __( 'New Beyond recipe', 'beyond-recipe' ),
        'edit_item'             => __( 'Edit Beyond recipe', 'beyond-recipe' ),
        'view_item'             => __( 'View Beyond recipe', 'beyond-recipe' ),
        'all_items'             => __( 'All Beyond recipes', 'beyond-recipe' ),
        'search_items'          => __( 'Search Beyond recipes', 'beyond-recipe' ),
        'parent_item_colon'     => __( 'Parent Beyond recipes:', 'beyond-recipe' ),
        'not_found'             => __( 'No Beyond recipes found.', 'beyond-recipe' ),
        'not_found_in_trash'    => __( 'No Beyond recipes found in Trash.', 'beyond-recipe' ),
        'featured_image'        => _x( 'Beyond Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'beyond-recipe' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'beyond-recipe' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'beyond-recipe' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'beyond-recipe' ),
        'archives'              => _x( 'Beyond Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'beyond-recipe' ),
        'insert_into_item'      => _x( 'Insert into Beyond recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'beyond-recipe' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Beyond recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'beyond-recipe' ),
        'filter_items_list'     => _x( 'Filter Beyond recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'beyond-recipe' ),
        'items_list_navigation' => _x( 'Beyond Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'beyond-recipe' ),
        'items_list'            => _x( 'Beyond Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'beyond-recipe' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Beyond Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'beyond-recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );

	register_post_type( 'beyond-recipe', $args );
}