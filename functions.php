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

function enqueue_local_fontawesome() {
    wp_enqueue_style( 
        'font-awesome-local', 
        get_theme_file_uri( 'assets/fontawesome/css/all.min.css' ), 
        array(), 
        '7.x.x' 
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_local_fontawesome' );
add_action( 'enqueue_block_editor_assets', 'enqueue_local_fontawesome' );
