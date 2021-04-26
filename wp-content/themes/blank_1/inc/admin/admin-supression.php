<?php

function wpdocs_register_my_custom_delete_page(){
    add_menu_page( 
        __( 'delete', 'textdomain' ),
        '',
        'manage_options',
        'custompage_delete',
        'my_custom_menu_page_delete',
        '',
        // plugins_url( 'myplugin/images/icon.png' ),
        100
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_delete_page' );
 
function my_custom_menu_page_delete(){ 

    if(!empty($_GET['admin.php?page=custompage_delete&id='.'id'])){
        $id = $_GET['id'];
        $adminUrl = admin_url().'admin.php?page=custompage_delete&id='.$id;
        global $wpdb;
        $table = $wpdb->prefix.'message';
        $table2 = $wpdb->prefix.'client';
        $sdl =  "SELECT * FROM $table WHERE id = $id ";
        $messages = $wpdb->get_results($sdl, ARRAY_A);
        $id_client = $messages[0]['id_client'];
        $sql =  "SELECT * FROM $table2 WHERE id = $id_client ";
        $clients = $wpdb->get_results($sql, ARRAY_A);

        debug($messages);
        debug($clients);
    }
// <?php 
}