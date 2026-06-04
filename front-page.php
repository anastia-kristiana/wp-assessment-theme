<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php while ( have_posts() ) : the_post(); 
        // Fetch ACF Fields
        $heading = get_field('hero_heading');
        $description = get_field('hero_description');
        $cta1_text = get_field('hero_cta_1_text');
        $cta1_link = get_field('hero_cta_1_link');
        $cta2_text = get_field('hero_cta_2_text');
        $cta2_link = get_field('hero_cta_2_link');
        $hero_image = get_field('hero_image'); 
    ?>
    
    <section class="hero-section">
        <div class="container hero-inner">
            
            <div class="hero-content">
                <?php if($heading): ?>
                    <h1><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>
                
                <?php if($description): ?>
                    <p class="hero-desc"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
                
                <div class="hero-buttons">
                    <?php if($cta1_text && $cta1_link): ?>
                        <a href="<?php echo esc_url($cta1_link); ?>" class="btn-outline"><?php echo esc_html($cta1_text); ?></a>
                    <?php endif; ?>
                    
                    <?php if($cta2_text && $cta2_link): ?>
                        <a href="<?php echo esc_url($cta2_link); ?>" class="btn-primary"><?php echo esc_html($cta2_text); ?></a>
                    <?php endif; ?>
                </div>

                <div class="hero-stats">
                    <?php 
                    // Loop through our 3 stat boxes
                    for($i=1; $i<=3; $i++): 
                        $num = get_field('stat_'.$i.'_number');
                        $label = get_field('stat_'.$i.'_label');
                        if($num && $label):
                    ?>
                        <div class="stat-box">
                            <h3><?php echo esc_html($num); ?></h3>
                            <p><?php echo esc_html($label); ?></p>
                        </div>
                    <?php 
                        endif;
                    endfor; 
                    ?>
                </div>
            </div>
            
            <div class="hero-visual" <?php if($hero_image): ?>style="background-image: url('<?php echo esc_url($hero_image['url']); ?>');"<?php endif; ?>>
                
                <div class="circular-badge">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/discover_your_dream_property.png" alt="Discover Property">
                </div>
            </div>
            
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <?php 
                // Loop through 4 feature boxes
                for($i=1; $i<=4; $i++): 
                    $text = get_field('feature_'.$i.'_text');
                    $icon = get_field('feature_'.$i.'_icon');
                    
                    if($text && $icon):
                ?>
                    <div class="feature-box">
                        <div class="box-arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
                        </div>
                        
                        <div class="icon-wrapper">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($text); ?>">
                        </div>
                        <h4><?php echo esc_html($text); ?></h4>
                    </div>
                <?php 
                    endif;
                endfor; 
                ?>
            </div>
        </div>
    </section>

    <section class="properties-section">
        <div class="container">
            
            <!-- Section Header -->
            <div class="section-header">
                <div class="header-text">
                    <h2>Featured Properties</h2>
                    <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click "View Details" for more information.</p>
                </div>
                <a href="#" class="btn-outline">View All Properties</a>
            </div>

            <!-- Properties Grid -->
            <div class="properties-grid">
                <?php
                // Query the Custom Post Type
                $args = array(
                    'post_type' => 'property',
                    'posts_per_page' => 3
                );
                $property_query = new WP_Query($args);

                if ( $property_query->have_posts() ) :
                    while ( $property_query->have_posts() ) : $property_query->the_post();
                        
                        // Fetch ACF data
                        $beds = get_field('bedrooms');
                        $baths = get_field('bathrooms');
                        $type = get_field('property_type');
                        $price = get_field('price');
                ?>
                    <div class="property-card">
                        <div class="card-image">
                            <!-- Fetches the native WP Featured Image -->
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="card-content">
                            <h3><?php the_title(); ?></h3>
                            <div class="card-desc">
                                <!-- Trims the description and adds Read More -->
                                <?php echo wp_trim_words( get_the_content(), 15, '... <a href="#" class="read-more">Read More</a>' ); ?>
                            </div>
                            
                            <div class="card-badges">
                                <?php if($beds): ?><span><img src="<?php echo get_template_directory_uri(); ?>/images/property-icon3.png" alt="Bedrooms"> <?php echo esc_html($beds); ?>-Bedroom</span><?php endif; ?>
                                <?php if($baths): ?><span><img src="<?php echo get_template_directory_uri(); ?>/images/property-icon2.png" alt="Bedrooms"> <?php echo esc_html($baths); ?>-Bathroom</span><?php endif; ?>
                                <?php if($type): ?><span><img src="<?php echo get_template_directory_uri(); ?>/images/property-icon1.png" alt="Bedrooms"> <?php echo esc_html($type); ?></span><?php endif; ?>
                            </div>
                            
                            <div class="card-footer">
                                <div class="price-block">
                                    <span class="price-label">Price</span>
                                    <span class="price-amount">$<?php echo esc_html($price); ?></span>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-primary">View Property Details</a>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); // Resets WP loop after custom query
                endif;
                ?>
            </div>

            <!-- Pagination Bar -->
            <div class="properties-pagination">
                <span class="page-count">01 of 60</span>
                <div class="nav-arrows">
                    <button class="arrow-btn">←</button>
                    <button class="arrow-btn">→</button>
                </div>
            </div>

        </div>
    </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>