<?php




 // Add stylesheets
 function custom_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

// Add custom stylesheets
function enqueue_custom_styles() {
    
    // Enqueue front-page styles
    if (is_page('homepage')) {
        wp_enqueue_style('front-page-styles', get_template_directory_uri() . '/css/front-page.css');
    }

    // Enqueue contact page styles
    if (is_page('contact')) {
        wp_enqueue_style('contact-page-styles', get_template_directory_uri() . '/css/contact.css');
    }

    // Enqueue about us page styles
    if (is_page('about-us')) {
        wp_enqueue_style('about-page-styles', get_template_directory_uri() . '/css/about-us.css');
    }

    // Enqueue WooCommerce shop page styles
    if (is_shop()) {
        wp_enqueue_style('shop-page-styles', get_template_directory_uri() . '/css/shop.css');
    }

    // Enqueue WooCommerce single product page styles
    if (is_product()) {
        wp_enqueue_style('product-page-styles', get_template_directory_uri() . '/css/product.css');
    }
    if (is_product_category()) {
        wp_enqueue_style('product-page-styles', get_template_directory_uri() . '/css/shop.css');
    }
    if (is_product_tag()) {
        wp_enqueue_style('product-page-styles', get_template_directory_uri() . '/css/shop.css');
    }


    // Enqueue WooCommerce cart page styles
    if (is_cart()) {
        wp_enqueue_style('cart-page-styles', get_template_directory_uri() . '/css/cart.css');
    }

    // Enqueue WooCommerce checkout page styles
    if (is_page('checkout')) {
        wp_enqueue_style('checkout-page-styles', get_template_directory_uri() . '/css/checkout.css');
    }
     // Enqueue WooCommerce order received (thank you) page styles
     if (is_checkout() && get_query_var('order-received')) {
        wp_enqueue_style('order-received-styles', get_template_directory_uri() . '/css/order-received.css');
    }

    // Enqueue terms, privacy, and copyright page styles
    if (is_page(array('terms-of-service', 'privacy-policy', 'copyrights'))) {
        wp_enqueue_style('terms-page-styles', get_template_directory_uri() . '/css/terms.css');
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
/* test what template cart page is reading  */
add_action( 'wp_footer', function() {
    if ( is_cart() ) {
        global $template;
        echo '<!-- Cart Page Template: ' . basename( $template ) . ' -->';
    }
});

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

// Enqueue WooCommerce cart fragments for AJAX cart updates
function custom_theme_enqueue_woocommerce_cart_fragments() {
    if (class_exists('WooCommerce')) {
        wp_enqueue_script('wc-cart-fragments'); // Essential for cart updates via AJAX
    }
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_woocommerce_cart_fragments',100);

 
?>