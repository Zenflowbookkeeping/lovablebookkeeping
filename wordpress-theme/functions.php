<?php
/**
 * Wenonah Bookkeeping Theme Functions
 *
 * @package Wenonah_Bookkeeping
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function wenonah_theme_setup() {
    // Add title tag support
    add_theme_support('title-tag');

    // Add featured image support
    add_theme_support('post-thumbnails');

    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wenonah-bookkeeping'),
        'footer'  => __('Footer Menu', 'wenonah-bookkeeping'),
    ));
}
add_action('after_setup_theme', 'wenonah_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function wenonah_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'wenonah-google-fonts',
        'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Stylesheet
    wp_enqueue_style(
        'wenonah-style',
        get_stylesheet_uri(),
        array('wenonah-google-fonts'),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'wenonah-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Localize script for AJAX
    wp_localize_script('wenonah-main', 'wenonahAjax', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('wenonah_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'wenonah_enqueue_scripts');

/**
 * Custom Excerpt Length
 */
function wenonah_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'wenonah_excerpt_length');

/**
 * Handle Contact Form Submission
 */
function wenonah_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'wenonah_nonce')) {
        wp_send_json_error('Security check failed');
    }

    // Sanitize form data
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $phone   = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields');
    }

    // Send email
    $to      = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8', "Reply-To: $email");

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_wenonah_contact', 'wenonah_handle_contact_form');
add_action('wp_ajax_nopriv_wenonah_contact', 'wenonah_handle_contact_form');

/**
 * Add Theme Customizer Options
 */
function wenonah_customize_register($wp_customize) {
    // Contact Section
    $wp_customize->add_section('wenonah_contact', array(
        'title'    => __('Contact Information', 'wenonah-bookkeeping'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('wenonah_phone', array(
        'default'           => '(856) 238-4543',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('wenonah_phone', array(
        'label'   => __('Phone Number', 'wenonah-bookkeeping'),
        'section' => 'wenonah_contact',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('wenonah_email', array(
        'default'           => 'info@wenonahbookkeeping.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('wenonah_email', array(
        'label'   => __('Email Address', 'wenonah-bookkeeping'),
        'section' => 'wenonah_contact',
        'type'    => 'email',
    ));

    // Social Links Section
    $wp_customize->add_section('wenonah_social', array(
        'title'    => __('Social Links', 'wenonah-bookkeeping'),
        'priority' => 35,
    ));

    $social_networks = array('facebook', 'linkedin', 'instagram');
    foreach ($social_networks as $network) {
        $wp_customize->add_setting('wenonah_' . $network, array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control('wenonah_' . $network, array(
            'label'   => ucfirst($network) . ' URL',
            'section' => 'wenonah_social',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'wenonah_customize_register');
