<?php

 // Add stylesheets
 function custom_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

// Add custom stylesheets
function enqueue_custom_styles() {
        
    // Check if it's the specific page where you want to apply the styles
    if (is_page('homepage')) {
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/front-page.css');
    }
    if (is_page('contact-us')) {
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/contact.css');
    }
    if (is_page('about-us')) {
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/about-us.css');
    }
    if (is_shop()) { // Correct way to check for WooCommerce shop page
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/shop.css');
    }
    if (is_product()) {
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/product.css'/*, array(), null, 'all'*/);
    }
    if (is_page('checkout')) {
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/checkout.css');
    }
    if (is_page(array('terms-of-service', 'privacy-policy', 'copyrights'))) {
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/terms.css');
    }
    
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// make woocommerce listen to you
add_action('after_setup_theme', function () {
    add_theme_support('woocommerce');
});
function my_theme_widgets_init() {
    register_sidebar(array(
        'name' => 'Shop Sidebar',
        'id' => 'shop-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');



// Add remove gutenberg
function remove_gutenberg() {
    remove_post_type_support( 'page', 'editor' );
    remove_post_type_support( 'post', 'editor' );
}
add_action( 'init', 'remove_gutenberg' );


// Remove wordpress bar
add_filter( 'show_admin_bar', '__return_false' );


function my_custom_enqueue_woocommerce_styles() {
    // Enqueue the WooCommerce frontend scripts again
    if (class_exists('WooCommerce')) {
        wp_enqueue_script('wc-add-to-cart-variation');
    }
}
add_action('wp_enqueue_scripts', 'my_custom_enqueue_woocommerce_styles', 20);




?>