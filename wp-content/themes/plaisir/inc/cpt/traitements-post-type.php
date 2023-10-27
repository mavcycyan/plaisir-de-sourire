<?php

function pt_traitements_init() {
    $labels = array(
        'name'                  => __( 'Traitements', 'plaisir' ),
        'singular_name'         => __( 'Traitement', 'plaisir' ),
        'menu_name'             => __( 'Traitements', 'plaisir' ),
        'name_admin_bar'        => __( 'Traitement', 'plaisir' ),
        'add_new'               => __( 'Add New', 'plaisir' ),
        'add_new_item'          => __( 'Add New Traitement', 'plaisir' ),
        'new_item'              => __( 'New Traitement', 'plaisir' ),
        'edit_item'             => __( 'Edit Traitement', 'plaisir' ),
        'view_item'             => __( 'View Traitement', 'plaisir' ),
        'all_items'             => __( 'All Traitements', 'plaisir' ),
        'search_items'          => __( 'Search Traitements', 'plaisir' ),
        'parent_item_colon'     => __( 'Parent Traitements:', 'plaisir' ),
        'not_found'             => __( 'No Traitements found.', 'plaisir' ),
        'not_found_in_trash'    => __( 'No Traitements found in Trash.', 'plaisir' ),
        'featured_image'        => __( 'Traitement Cover Image', 'plaisir' ),
        'set_featured_image'    => __( 'Set cover image', 'plaisir' ),
        'remove_featured_image' => __( 'Remove cover image', 'plaisir' ),
        'use_featured_image'    => __( 'Use as cover image', 'plaisir' ),
        'archives'              => __( 'Traitement archives', 'plaisir' ),
        'insert_into_item'      => __( 'Insert into Traitement', 'plaisir' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Traitement', 'plaisir' ),
        'filter_items_list'     => __( 'Filter Traitements list', 'plaisir' ),
        'items_list_navigation' => __( 'Traitements list navigation', 'plaisir' ),
        'items_list'            => __( 'Traitements list', 'plaisir' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'traitements' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_rest'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'traitements', $args );
}

add_action( 'init', 'pt_traitements_init' );