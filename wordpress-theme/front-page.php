<?php
/**
 * Front Page Template
 *
 * @package Wenonah_Bookkeeping
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Your books deserve <span class="font-script">better</span> — and so do you.</h1>
                <p>I'm Jake, and I help small business owners like you take control of their finances. Whether it's cleaning up your QuickBooks, handling monthly bookkeeping, or getting you tax-ready — I've got you covered.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">BOOK A CALL WITH JAKE</a>
                    <a href="#contact" class="btn btn-outline">SEND ME A QUICK NOTE</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/jake-portrait.png" alt="Jake Demi - Professional Bookkeeper">
                <p class="hero-name font-script">Jake Demi</p>
                <div class="social-links">
                    <a href="<?php echo esc_url(get_theme_mod('wenonah_facebook', '#')); ?>" aria-label="Facebook">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('wenonah_linkedin', '#')); ?>" aria-label="LinkedIn">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('wenonah_instagram', '#')); ?>" aria-label="Instagram">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-header">
            <h2>How I Can Help You</h2>
            <p>Professional bookkeeping services tailored to your business needs</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Monthly Bookkeeping</h3>
                <p>Keep your books accurate and up-to-date every month so you can focus on running your business.</p>
                <ul class="service-features">
                    <li>Bank reconciliation</li>
                    <li>Transaction categorization</li>
                    <li>Monthly financial reports</li>
                    <li>QuickBooks maintenance</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">🧹</div>
                <h3>QuickBooks Cleanup</h3>
                <p>Got messy books? I'll clean up your QuickBooks and get everything organized and accurate.</p>
                <ul class="service-features">
                    <li>Error correction</li>
                    <li>Account reconciliation</li>
                    <li>Chart of accounts optimization</li>
                    <li>Historical data cleanup</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">📋</div>
                <h3>Tax Preparation Support</h3>
                <p>Get your financials organized and ready for tax season without the last-minute stress.</p>
                <ul class="service-features">
                    <li>Year-end preparation</li>
                    <li>1099 preparation</li>
                    <li>CPA coordination</li>
                    <li>Tax document organization</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing" id="pricing">
    <div class="container">
        <div class="section-header">
            <h2>Simple, Transparent Pricing</h2>
            <p>Choose the plan that fits your business needs</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Starter</h3>
                <p class="price">$250<span>/month</span></p>
                <ul class="pricing-features">
                    <li>Up to 50 transactions</li>
                    <li>Bank reconciliation</li>
                    <li>Monthly P&L report</li>
                    <li>Email support</li>
                </ul>
                <a href="#contact" class="btn btn-outline">Get Started</a>
            </div>
            <div class="pricing-card popular">
                <span class="popular-badge">Most Popular</span>
                <h3>Growth</h3>
                <p class="price">$450<span>/month</span></p>
                <ul class="pricing-features">
                    <li>Up to 150 transactions</li>
                    <li>Bank & credit card reconciliation</li>
                    <li>Monthly financial reports</li>
                    <li>Accounts payable tracking</li>
                    <li>Phone & email support</li>
                </ul>
                <a href="#contact" class="btn btn-primary">Get Started</a>
            </div>
            <div class="pricing-card">
                <h3>Premium</h3>
                <p class="price">$750<span>/month</span></p>
                <ul class="pricing-features">
                    <li>Unlimited transactions</li>
                    <li>Full-service bookkeeping</li>
                    <li>Weekly financial reports</li>
                    <li>Cash flow management</li>
                    <li>Priority support</li>
                </ul>
                <a href="#contact" class="btn btn-outline">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>What My Clients Say</h2>
            <p>Don't just take my word for it</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-content">"Jake completely transformed our bookkeeping. Our QuickBooks was a mess, and now everything is organized and accurate. Highly recommend!"</p>
                <p class="testimonial-author">Sarah M.</p>
                <p class="testimonial-role">Restaurant Owner</p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-content">"Finally, a bookkeeper who actually explains things in plain English. Jake made tax season stress-free for the first time ever."</p>
                <p class="testimonial-author">Mike R.</p>
                <p class="testimonial-role">Contractor</p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-content">"Professional, responsive, and thorough. Jake catches errors I never would have found. Worth every penny."</p>
                <p class="testimonial-author">Jennifer L.</p>
                <p class="testimonial-role">E-commerce Business Owner</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="about-content">
            <div class="about-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/jake-portrait.png" alt="Jake Demi">
            </div>
            <div class="about-text">
                <h2>About Jake</h2>
                <p>Hi, I'm Jake Demi, founder of Wenonah Bookkeeping. With over 10 years of experience in bookkeeping and accounting, I've helped hundreds of small business owners get their finances in order.</p>
                <p>I believe that good bookkeeping shouldn't be complicated or stressful. My mission is to give you peace of mind by keeping your books clean, accurate, and up-to-date — so you can focus on what you do best: running your business.</p>
                <p>Based in South Jersey, I work with clients across the country, specializing in QuickBooks Online and small business bookkeeping.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Let's Talk About Your Books</h2>
                <p>Ready to get your finances in order? Fill out the form and I'll get back to you within 24 hours.</p>
                <p><strong>Phone:</strong> <?php echo esc_html(get_theme_mod('wenonah_phone', '(856) 238-4543')); ?></p>
                <p><strong>Email:</strong> <?php echo esc_html(get_theme_mod('wenonah_email', 'info@wenonahbookkeeping.com')); ?></p>
            </div>
            <form class="contact-form" id="contact-form">
                <?php wp_nonce_field('wenonah_nonce', 'contact_nonce'); ?>
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
