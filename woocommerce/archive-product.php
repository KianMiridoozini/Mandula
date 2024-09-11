<?php
defined('ABSPATH') || exit;

get_header('shop'); ?>
<section>
    <div class="shop-img">
        <img src=""alt="Shop Banner">
    </div>
    <div class="shop-text">
        <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, nobis. Non tenetur dolor ducimus sed molestias blanditiis omnis voluptate nostrum architecto eius ut et quaerat dolorum recusandae, incidunt, illum nisi.</h3>
</section>

<div class="shop-page-container">
    <aside class="shop-sidebar">
        <?php 
        // aws_get_search_form( true ); 
        

        echo do_shortcode('[annasta_filters preset_id=1]');
        // echo do_shortcode('[wcapf_form]');
        
        ?>
    </aside>

    <main class="shop-products">
        <?php
        /**
         * Hook: woocommerce_before_main_content.
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
         * @hooked WC_Structured_Data::generate_website_data() - 30
         */
        do_action('woocommerce_before_main_content');

        /**
         * Hook: woocommerce_shop_loop_header.
         *
         * @since 8.6.0
         *
         * @hooked woocommerce_product_taxonomy_archive_header - 10
         */
        do_action('woocommerce_shop_loop_header');

        if (woocommerce_product_loop()) {

            /**
             * Hook: woocommerce_before_shop_loop.
             *
             * @hooked woocommerce_output_all_notices - 10
             * @hooked woocommerce_result_count - 20
             * @hooked woocommerce_catalog_ordering - 30
             */
            do_action('woocommerce_before_shop_loop');

            woocommerce_product_loop_start();

            if (wc_get_loop_prop('total')) {
                while (have_posts()) {
                    the_post();

                    /**
                     * Hook: woocommerce_shop_loop.
                     */
                    do_action('woocommerce_shop_loop');

                    wc_get_template_part('content', 'product');
                }
            }

            woocommerce_product_loop_end();

            /**
             * Hook: woocommerce_after_shop_loop.
             *
             * @hooked woocommerce_pagination - 10
             */
            do_action('woocommerce_after_shop_loop');
        } else {
            /**
             * Hook: woocommerce_no_products_found.
             *
             * @hooked wc_no_products_found - 10
             */
            do_action('woocommerce_no_products_found');
        }

        /**
         * Hook: woocommerce_after_main_content.
         *
         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action('woocommerce_after_main_content'); ?>
    </main>
</div>


<?php get_footer('shop'); ?>
<script>
    (function($) {
    $(document).ready(function() {
        // Disable AJAX on mobile
        if ($(window).width() < 768) {
            $(document).on('click', '.annasta-filter', function(e) {
                e.preventDefault(); // Prevent AJAX on mobile
                // Optionally, submit the form manually or use the submit button
            });
        }
    });
})(jQuery);
</script>