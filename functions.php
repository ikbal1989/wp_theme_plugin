<?php
/**
 * theme functions and definitions
 *
 *
 * 
 */

// custom post 

require_once get_template_directory() . '/inc/custom_post.php';

// Hooking up our function to theme setup

if ( ! function_exists( 'blackcv_setup' ) ) :
	function blackcv_setup() {
		// load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

        // register menu of our theme
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'blackcv' ),
				'footer' => __( 'Footer Menu', 'blackcv' ),
				'social' => __( 'Social Links Menu', 'blackcv' ),
			)
		);

    }

endif;
add_action( 'after_setup_theme', 'blackcv_setup' );


function blackcv_scripts() {
    // add theme scripts
}

function blackcv_styles() {
    // add theme css


}


 function test ()
 {
    echo 'sdf';
 }
