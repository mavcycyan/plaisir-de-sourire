<?php

function pt_conseils_init() {
    $labels = array(
        'name'                  => __( 'Conseilss', 'plaisir' ),
        'singular_name'         => __( 'Conseils', 'plaisir' ),
        'menu_name'             => __( 'Conseilss', 'plaisir' ),
        'name_admin_bar'        => __( 'Conseils', 'plaisir' ),
        'add_new'               => __( 'Add New', 'plaisir' ),
        'add_new_item'          => __( 'Add New Conseils', 'plaisir' ),
        'new_item'              => __( 'New Conseils', 'plaisir' ),
        'edit_item'             => __( 'Edit Conseils', 'plaisir' ),
        'view_item'             => __( 'View Conseils', 'plaisir' ),
        'all_items'             => __( 'All Conseilss', 'plaisir' ),
        'search_items'          => __( 'Search Conseilss', 'plaisir' ),
        'parent_item_colon'     => __( 'Parent Conseilss:', 'plaisir' ),
        'not_found'             => __( 'No Conseilss found.', 'plaisir' ),
        'not_found_in_trash'    => __( 'No Conseilss found in Trash.', 'plaisir' ),
        'featured_image'        => __( 'Conseils Cover Image', 'plaisir' ),
        'set_featured_image'    => __( 'Set cover image', 'plaisir' ),
        'remove_featured_image' => __( 'Remove cover image', 'plaisir' ),
        'use_featured_image'    => __( 'Use as cover image', 'plaisir' ),
        'archives'              => __( 'Conseils archives', 'plaisir' ),
        'insert_into_item'      => __( 'Insert into Conseils', 'plaisir' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Conseils', 'plaisir' ),
        'filter_items_list'     => __( 'Filter Conseilss list', 'plaisir' ),
        'items_list_navigation' => __( 'Conseilss list navigation', 'plaisir' ),
        'items_list'            => __( 'Conseilss list', 'plaisir' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'conseils' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_rest'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'conseils', $args );
}

add_action( 'init', 'pt_conseils_init' );