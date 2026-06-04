<footer class="site-footer">
    <div class="container footer-inner">
        
        <!-- Brand & Newsletter Column -->
        <div class="footer-brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Estatein Logo">
                <span>Estatein</span>
            </a>
            
            <form class="newsletter-form" action="#" method="POST">
                <div class="input-wrapper">
                    <!-- Assuming you have an SVG icon for the email envelope -->
                    <span class="icon-email">✉️</span> 
                    <input type="email" placeholder="Enter Your Email" required>
                    <button type="submit" class="btn-send">🚀</button>
                </div>
            </form>
        </div>

        <!-- Links Grid -->
        <div class="footer-links">
            <div class="link-col">
                <h4>Home</h4>
                <ul>
                    <li><a href="#">Hero Section</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Properties</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">FAQ's</a></li>
                </ul>
            </div>
            <div class="link-col">
                <h4>About Us</h4>
                <ul>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Our Works</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Our Clients</a></li>
                </ul>
            </div>
            <div class="link-col">
                <h4>Properties</h4>
                <ul>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Categories</a></li>
                </ul>
            </div>
            <div class="link-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Valuation Mastery</a></li>
                    <li><a href="#">Strategic Marketing</a></li>
                    <li><a href="#">Negotiation Wizardry</a></li>
                    <li><a href="#">Closing Success</a></li>
                    <li><a href="#">Property Management</a></li>
                </ul>
            </div>
            <div class="link-col">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="#">Contact Form</a></li>
                    <li><a href="#">Our Offices</a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>