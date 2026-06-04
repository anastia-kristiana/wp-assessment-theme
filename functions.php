<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

function figma_theme_setup() {
    // Add default theme supports
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    // Register Navigation Menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'figmatheme' ),
    ) );
}
add_action( 'after_setup_theme', 'figma_theme_setup' );

function figma_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'figma-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'figma_theme_scripts' );