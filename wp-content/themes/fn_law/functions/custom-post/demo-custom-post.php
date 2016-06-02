<?php
/**
 * Demo custom post
 *
 * @package Wildebeest WP Boilerplate
 * @since 1.0
 */

// Create custom post
function demo_register() {

    $args = array(
        'labels' => array(
            'name'                  => __('Demo', 'wildebeest_wp'),
            'singular_name'         => __('demos', 'wildebeest_wp'),
            'add_new'               => __('Add new', 'wildebeest_wp'),
            'add_new_item'          => __('Add new demo', 'wildebeest_wp'),
            'edit_item'             => __('Edit demo', 'wildebeest_wp'),
            'new_item'              => __('New demo', 'wildebeest_wp'),
            'view_item'             => __('View demo', 'wildebeest_wp'),
            'search_items'          => __('Find demos', 'wildebeest_wp'),
            'not_found'             => __('No demos found', 'wildebeest_wp'),
            'not_found_in_trash'    => __('No demos found in Trash', 'wildebeest_wp'),
            'parent_item_colon'     => ''
        ),
        'public'                    => true,
        'publicly_queryable'        => true,
        'show_ui'                   => true,
        'query_var'                 => true,
        'rewrite'                   => array( 'slug' => '/demos', 'with_front' => true ),
        'capability_type'           => 'post',
        'hierarchical'              => false,
        'menu_position'             => 6,
        'menu_icon'                 => 'dashicons-format-aside',
        'taxonomies'                => array('category', 'post_tag'),
        'supports'                  => array( 'title' , 'excerpt' , 'editor' , 'thumbnail' ),
        'can_export'                => true
    ); 
    register_post_type( 'demo' , $args );
}

add_action( 'init', 'demo_register' );

?>