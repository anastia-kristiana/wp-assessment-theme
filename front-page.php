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
            
            <div class="hero-visual">
                <?php if($hero_image): ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" class="main-hero-img">
                <?php endif; ?>
                
                <div class="circular-badge">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/discover_your_dream_property.png" alt="Discover Property">
                </div>
            </div>
            
        </div>
    </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>