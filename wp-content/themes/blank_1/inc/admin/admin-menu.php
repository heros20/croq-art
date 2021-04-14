<?php
/** 
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Menus', 'textdomain' ),
        'menus menus',
        'manage_options',
        'custompage_menu',
        'my_custom_menu_page_menu',
        'dashicons-text-page',
        // plugins_url( 'myplugin/images/icon.png' ),
        4
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 
/** 
 * Display a custom menu page
 */
function my_custom_menu_page_menu(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_menu';
    ?>

    <form action="" method="POST" novalidate>
    <label for="nom">Nom du plat</label>
    <input type="text" name="nom" id="nom">

    <label for="prix">Prix</label>
    <input type="number" name="prix" id="prix">
    </form>    


<?php } ?>