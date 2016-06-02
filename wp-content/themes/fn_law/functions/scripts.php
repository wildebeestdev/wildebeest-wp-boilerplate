<?php
/**
 * This file loads the CSS and Javascript used for the theme
 *
 * @package Wildebeest WP Boilerplate
 * @since 1.0
 */

function theme_header_scripts() {

    // Styles
    wp_register_style( 'googlefonts' , 'http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans' , array() , '1.0' , 'all' );
    wp_enqueue_style( 'googlefonts' );

    wp_enqueue_style( 'wildebeest-style' , get_stylesheet_uri() );

    // JavaScript
    if ( $GLOBALS[ 'pagenow' ] != 'wp-login.php' && !is_admin() ) {

        wp_register_script( 'all' , get_template_directory_uri() . '/js/scripts.min.js' , array( 'jquery' ) , '1.0.0' ); // Custom scripts
        wp_enqueue_script( 'all' );

    }

    // Load conditional scripts
    /* Demo snippet 
    if ( is_page( 'pagenamehere' ) ) {
        wp_register_script( 'scriptname' , get_template_directory_uri() . '/js/scriptname.js' , array( 'jquery' ) , '1.0.0' ); // Conditional script(s)
        wp_enqueue_script( 'scriptname' );
    }
    */

    // Livereload for development process
    if ( in_array( $_SERVER[ 'REMOTE_ADDR' ], array( '127.0.0.1' , '::1' ) ) ) {
        wp_register_script( 'livereload', 'http://localhost:35729/livereload.js?snipver=1' , null , false , true );
        wp_enqueue_script( 'livereload' );
    }

}

add_action( 'wp_enqueue_scripts' , 'theme_header_scripts' );


// Add ajaxUrl
function add_ajaxurl() { ?>
    <script type="text/javascript">
        var ajaxUrl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
    </script>
<?php
}

add_action('wp_head','add_ajaxurl');

?>
