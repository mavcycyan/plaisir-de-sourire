<?php

function tx_clinique_init() {
    $labels = array(
        'name'              => _x( 'Clinique categories', 'taxonomy general name', 'plaisir' ),
        'singular_name'     => _x( 'Clinique category', 'taxonomy singular name', 'plaisir' ),
        'search_items'      => __( 'Search Clinique categories', 'plaisir' ),
        'all_items'         => __( 'All Clinique categories', 'plaisir' ),
        'parent_item'       => __( 'Parent Clinique category', 'plaisir' ),
        'parent_item_colon' => __( 'Parent Clinique category:', 'plaisir' ),
        'edit_item'         => __( 'Edit Clinique category', 'plaisir' ),
        'update_item'       => __( 'Update Clinique category', 'plaisir' ),
        'add_new_item'      => __( 'Add New Clinique category', 'plaisir' ),
        'new_item_name'     => __( 'New Clinique category Name', 'plaisir' ),
        'menu_name'         => __( 'Clinique category', 'plaisir' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'clinique' ),
    );

    register_taxonomy( 'clinique', array( 'cas-cliniques' ), $args );
}

add_action( 'init', 'tx_clinique_init', 0 );