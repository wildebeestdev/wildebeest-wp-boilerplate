<?php
/**
 * Setup the main theme functions
 *
 * @package Wildebeest WP Boilerplate
 * @since 1.0
 */

function wildebeest_wp_theme_setup() {

    // Add theme support
    if ( function_exists( 'add_theme_support' ) ) {
        
        // Add Menu Support
        add_theme_support( 'menus' );

        // Add Thumbnail Theme Support
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'large' , 1280 , 445 , true ); // Large Thumbnail
        add_image_size( 'medium', 350 , 220 , true ); // Medium Thumbnail
        add_image_size( 'small', 120 , '' , true ); // Small Thumbnail
        add_image_size( 'custom-thumbnail' , 500 , 500 , true ); // Custom Thumbnail

        // Enables post and comment RSS feed links to head
        add_theme_support( 'automatic-feed-links' );

        // Localization Support
        load_theme_textdomain( 'wildebeest_wp' , get_template_directory() . '/languages' );
    }

    // Register navigation menus
    register_nav_menus( array( 
        'header-menu' => __( 'Header Menu' , 'wildebeest_wp' ), // Main Navigation
        'sidebar-menu' => __( 'Sidebar Menu' , 'wildebeest_wp' ), // Sidebar Navigation
        'footer-menu' => __( 'Footer Menu' , 'wildebeest_wp' ) // Footer Navigation
    ));

    // Remove all visual interfaces from the Advanced Custom Fields
    define( 'ACF_LITE' , true );
}

add_action( 'after_setup_theme' , 'wildebeest_wp_theme_setup' );

?>
