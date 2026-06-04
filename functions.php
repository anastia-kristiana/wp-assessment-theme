esc_html__( 'Primary Menu', 'figmatheme' ),
    ) );
}
add_action( 'after_setup_theme', 'figma_theme_setup' );

function figma_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'figma-theme-style', get_stylesheet_uri() );
    
    // Optional: Enqueue a custom JS file
    // wp_enqueue_script( 'figma-theme-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'figma_theme_scripts' );