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
      echo '<a class="button continue" href="https://lecroqartcafe.fr/shop/" >Retour à la boutique</a>';
      echo '<a class="button continue" href="https://lecroqartcafe.fr/panier/" >Votre panier</a>';
	}
 }
add_action( 'woocommerce_before_shop_loop', 'woocommercefunction');
function wpm_continue_shopping_button() {

	 // On récupère le lien de votre page boutique   
	 $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
 
	 // On ajoute notre bouton 
	echo '<div class="wpm-continue-shopping">';
	echo ' <a href="'.$shop_page_url.'" class="button wpm-shopping-button">Retour à la boutique</a>';
	echo '</div>';
}
add_action( 'woocommerce_before_cart', 'wpm_continue_shopping_button' );


