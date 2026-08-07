<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package askdesignblog child
 * @since 1.0.0
 */

/**
 * Enqueue fontawesome.
 * 
 * @since 1.0.0
 */

function enqueue_optimized_fontawesome_7() {
    $fa_base_url = get_theme_file_uri( 'assets/fontawesome/css/' );

    // 1. Mandatory Core File
    wp_enqueue_style( 'fa-core', $fa_base_url . 'fontawesome.min.css', array(), '7.3.0' );

    // 2. Individual Lean Styles matching your webfonts
    $fa_styles = array(
        'fa-brands'  => 'brands.min.css',
        'fa-regular' => 'regular.min.css',
        'fa-solid'   => 'solid.min.css'
    );

    foreach ( $fa_styles as $handle => $filename ) {
        wp_enqueue_style( 
            $handle, 
            $fa_base_url . $filename, 
            array( 'fa-core' ), 
            '7.3.0' 
        );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_optimized_fontawesome_7' );
add_action( 'enqueue_block_editor_assets', 'enqueue_optimized_fontawesome_7' );
