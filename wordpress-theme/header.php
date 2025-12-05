<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <div class="logo-icon">W</div>
                <span class="logo-text"><?php bloginfo('name'); ?></span>
            <?php endif; ?>
        </a>

        <nav class="nav-menu" id="nav-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => 'wenonah_fallback_menu',
                'items_wrap'     => '%3$s',
                'depth'          => 1,
            ));
            ?>
        </nav>

        <a href="tel:<?php echo esc_attr(get_theme_mod('wenonah_phone', '(856) 238-4543')); ?>" class="nav-phone">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <?php echo esc_html(get_theme_mod('wenonah_phone', '(856) 238-4543')); ?>
        </a>

        <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="Toggle menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
    </div>
</header>

<?php
/**
 * Fallback menu if no menu is assigned
 */
function wenonah_fallback_menu() {
    echo '<a href="#services">Services</a>';
    echo '<a href="#pricing">Pricing</a>';
    echo '<a href="#testimonials">Testimonials</a>';
    echo '<a href="#about">About</a>';
    echo '<a href="#contact">Contact</a>';
}
?>
