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

// Font Awesome
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

/* // Adjusted Stylesheets via wp-dot-org and AI using a named function 
// Tried this method. Couldn't get the cache to clear parent theme tt5 styles  

// Enqueue only the custom assets style for the child theme
add_action( 'wp_enqueue_scripts', 'ask_design_blog_child_styles' );
function ask_design_blog_child_styles() {
    
    // Safely point exclusively to your child theme's assets folder
    wp_enqueue_style( 
        'ask-design-custom-style', 
        get_stylesheet_directory_uri() . '/assets/custom.css', 
        array(), 
        '1.0.0' 
    );
}

// 2. Editor Canvas: Load only the custom assets stylesheet into the editor
add_action( 'after_setup_theme', 'ask_design_blog_child_editor_styles' );
function ask_design_blog_child_editor_styles() {
    // Enables stylesheet parsing for the editor area
    add_theme_support( 'editor-styles' );
    
    // Pass the relative path to your custom file
    add_editor_style( 'assets/custom.css' );
} */



/* // Stylesheets via Birgit and AI

// 1. Enqueue your extensive custom styles for frontend website visitors
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 
        'my-theme-custom', 
        get_theme_file_uri( 'assets/css/custom.css' ), 
        array(), 
        '1.0.0' 
    );
});


// 2. Editor Canvas: Safely map your theme structure (Snippet from your reliable source)
add_action( 'after_setup_theme', 'theme_slug_setup' );
function theme_slug_setup() {
    
    // Enables stylesheet parsing for the editor area
    add_theme_support( 'editor-styles' );
    
    // Pass a relative path to the root style.css. 
    // This satisfies WordPress requirements without breaking or leaking styles into the FSE.
    add_editor_style( 'style.css' );
    
}

 */