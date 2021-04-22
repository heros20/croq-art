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
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );



