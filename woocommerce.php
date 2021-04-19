<?php
/**
* Template Name: Products Template
* Template Post Type: Product
*/
 get_header('shop');
?>
 <div class="wrap">
   <?php
     /**
     * woocommerce_before_main_content hook
     * @hooked woocommerce_output_content_wrapper - 10(outputs the opening divs)
     * @hooked woocommerce_breadcrumb - 20
     */
     do_action('woocommerce_before_main_content');
   ?>
 <main id="product-main">
   <?php woocommerce_content(); ?>
 </main>
 <?php
    /**
    * woocommerce_sidebar hook.
    * @hooked woocommerce_get_sidebar - 10
    */
    do_action('woocommerce_sidebar');
 ?>
 </div>
<?php
 get_footer('shop');
 ?>
