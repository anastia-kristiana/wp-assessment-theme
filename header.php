<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <p>✨ Discover Your Dream Property with Estatein <a href="#">Learn More</a></p>
    </div>
</div>

<!-- Main Header -->
<header class="site-header">
    <div class="container header-inner">
        
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Estatein Logo">
        </a>

        <!-- Navigation -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-list',
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>

        <!-- CTA Button -->
        <div class="header-cta">
            <a href="/contact" class="btn-outline">Contact Us</a>
        </div>

    </div>
</header>