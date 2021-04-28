<?php

require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/func.php';
require get_template_directory() . '/inc/image.php';

require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';

require get_template_directory() . '/inc/admin/admin-contact.php';
require get_template_directory() . '/inc/admin/admin-reservation.php';
require get_template_directory() . '/inc/admin/admin-moderation.php';

require get_template_directory() . '/inc/custom/custom-slider.php';
require get_template_directory() . '/inc/custom/custom-presentation.php';
require get_template_directory() . '/inc/custom/custom-avis.php';
require get_template_directory() . '/inc/custom/custom-menu.php';
require get_template_directory() . '/inc/custom/custom-contact.php';
require get_template_directory() . '/inc/custom/custom-footer.php';
require get_template_directory() . '/inc/custom/custom-gallery.php';

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
} 
function woocommercefunction() {
	 if (is_product_category()){
      echo '<a class="button continue" href="https://bay-key.fr/shop/" >Retour à la boutique</a>';
      echo '<button class="button continue" style="display:block;" onclick="history.go(-1);">Page précédente</button>';
	}
 }
add_action( 'woocommerce_before_shop_loop', 'woocommercefunction');

// function bbloomer_continue_shopping_button() {
//    echo '<a class="button continue" href="https://bay-key.fr/shop/">Retour à la boutique</a>';
//    echo '<button style="display:block;" onclick="history.go(-3);">Page précédente</button>';
// } 
// add_action( 'woocommerce_after_add_to_cart_button', 'bbloomer_continue_shopping_button', 50 );



