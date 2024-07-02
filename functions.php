


<?php


function enqueue_tailwind() {
    wp_enqueue_style( 'tailwind-css', get_template_directory_uri() . '/src/output.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_tailwind' );
 // Add stylesheets
 function custom_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );



?>  