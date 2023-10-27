<?php

function pt_cas_cliniques_init() {
    $labels = array(
        'name'                  => __( 'Cas cliniques', 'plaisir' ),
        'singular_name'         => __( 'Cas clinique', 'plaisir' ),
        'menu_name'             => __( 'Cas cliniques', 'plaisir' ),
        'name_admin_bar'        => __( 'Cas clinique', 'plaisir' ),
        'add_new'               => __( 'Add New', 'plaisir' ),
        'add_new_item'          => __( 'Add New Cas clinique', 'plaisir' ),
        'new_item'              => __( 'New Cas clinique', 'plaisir' ),
        'edit_item'             => __( 'Edit Cas clinique', 'plaisir' ),
        'view_item'             => __( 'View Cas clinique', 'plaisir' ),
        'all_items'             => __( 'All Cas cliniques', 'plaisir' ),
        'search_items'          => __( 'Search Cas cliniques', 'plaisir' ),
        'parent_item_colon'     => __( 'Parent Cas cliniques:', 'plaisir' ),
        'not_found'             => __( 'No Cas cliniques found.', 'plaisir' ),
        'not_found_in_trash'    => __( 'No Cas cliniques found in Trash.', 'plaisir' ),
        'featured_image'        => __( 'Cas clinique Cover Image', 'plaisir' ),
        'set_featured_image'    => __( 'Set cover image', 'plaisir' ),
        'remove_featured_image' => __( 'Remove cover image', 'plaisir' ),
        'use_featured_image'    => __( 'Use as cover image', 'plaisir' ),
        'archives'              => __( 'Cas clinique archives', 'plaisir' ),
        'insert_into_item'      => __( 'Insert into Cas clinique', 'plaisir' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Cas clinique', 'plaisir' ),
        'filter_items_list'     => __( 'Filter Cas cliniques list', 'plaisir' ),
        'items_list_navigation' => __( 'Cas cliniques list navigation', 'plaisir' ),
        'items_list'            => __( 'Cas cliniques list', 'plaisir' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cas-cliniques' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_rest'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'cas-cliniques', $args );
}

add_action( 'init', 'pt_cas_cliniques_init' );