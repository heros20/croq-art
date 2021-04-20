<?php

function wpdocs_register_my_custom_moderation_page(){
    add_menu_page( 
        __( 'moderation', 'textdomain' ),
        'moderation menu',
        'manage_options',
        'custompage_moderation',
        'my_custom_menu_page_moderation',
        'dashicons-groups',
        // plugins_url( 'myplugin/images/icon.png' ),
        2
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_moderation_page' );
 
function my_custom_menu_page_moderation(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_moderation';
?>
<form action="" method="POST" novalidate>
<select name="valid" id="valid">
    <option value=""></option>
    <option value="validé">Validé</option>
    <option value="refusé">Refusé</option>
</select>
<input type="submit" name="submitted" value="">
</form>

<?php }