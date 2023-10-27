<?php

function tx_traitement_init() {
    $labels = array(
        'name'              => _x( 'Traitement categories', 'taxonomy general name', 'plaisir' ),
        'singular_name'     => _x( 'Traitement category', 'taxonomy singular name', 'plaisir' ),
        'search_items'      => __( 'Search Traitement categories', 'plaisir' ),
        'all_items'         => __( 'All Traitement categories', 'plaisir' ),
        'parent_item'       => __( 'Parent Traitement category', 'plaisir' ),
        'parent_item_colon' => __( 'Parent Traitement category:', 'plaisir' ),
        'edit_item'         => __( 'Edit Traitement category', 'plaisir' ),
        'update_item'       => __( 'Update Traitement category', 'plaisir' ),
        'add_new_item'      => __( 'Add New Traitement category', 'plaisir' ),
        'new_item_name'     => __( 'New Traitement category Name', 'plaisir' ),
        'menu_name'         => __( 'Traitement category', 'plaisir' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'traitement' ),
    );

    register_taxonomy( 'traitement', array( 'traitements' ), $args );
}

add_action( 'init', 'tx_traitement_init', 0 );