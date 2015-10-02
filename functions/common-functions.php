<?php
/**
 * Common functions and filters used through the theme
 *
 * @package Wildebeest WP Boilerplate
 * @since 1.0
 */


// Wildebeest WP Boilerplate navigation
function wildebeest_wp_nav() {
    wp_nav_menu(
    array(
        'theme_location'  => 'header-menu',
        'container'       => false,
        'items_wrap'      => '<ul class="main-nav-items">%3$s</ul>',
        )
    );
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args( $args = '' ) {
    $args[ 'container' ] = false;
    return $args;
}
add_filter( 'wp_nav_menu_args' , 'my_wp_nav_menu_args' );


// Utils

// Convert hexadecimal to rgb
function hex2rgb( $hex ) {

    $hex = str_replace( '#' , '' , $hex );

    if( strlen( $hex ) == 3) {
        $r = hexdec( substr( $hex , 0 , 1 ).substr( $hex , 0 , 1 ) );
        $g = hexdec( substr( $hex , 1 , 1 ).substr( $hex , 1 , 1 ) );
        $b = hexdec( substr( $hex , 2 , 1 ).substr( $hex , 2 , 1 ) );
    } else {
        $r = hexdec( substr( $hex , 0 , 2 ) );
        $g = hexdec( substr( $hex , 2 , 2 ) );
        $b = hexdec( substr( $hex , 4 , 2 ) );
    }

    $rgb = array( $r , $g , $b );

    return implode( ',' , $rgb );
}

?>