<?php 
/**
 * Demo custom taxonomy
 *
 * @package Wildebeest WP Boilerplate
 * @since 1.0
 */

// Create taxonomy
function demo_taxonomy_register() {

    $labels = array(
        'name'                       => __( 'Demos' , 'wildebeest_wp' ),
        'singular_name'              => __( 'Demo' , 'wildebeest_wp' ),
        'search_items'               => __( 'Seach Demos' , 'wildebeest_wp' ),
        'popular_items'              => __( 'Popular Demos' , 'wildebeest_wp' ),
        'all_items'                  => __( 'All Demos' , 'wildebeest_wp' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Demo' , 'wildebeest_wp' ),
        'update_item'                => __( 'Update Demo' , 'wildebeest_wp' ),
        'add_new_item'               => __( 'Add New Demo' , 'wildebeest_wp' ),
        'new_item_name'              => __( 'New Demos Name' , 'wildebeest_wp' ),
        'separate_items_with_commas' => __( 'Separate demos with commas' , 'wildebeest_wp' ),
        'add_or_remove_items'        => __( 'Add or remove demos' , 'wildebeest_wp' ),
        'choose_from_most_used'      => __( 'Choose from the most used demos' , 'wildebeest_wp' ),
        'not_found'                  => __( 'No demos found' , 'wildebeest_wp' ),
        'menu_name'                  => __( 'Demos' , 'wildebeest_wp' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'demo' ),
    );

    register_taxonomy( 'demo', array( 'demo' ), $args );

}

add_action( 'init', 'demo_taxonomy_register', 0 );

?>