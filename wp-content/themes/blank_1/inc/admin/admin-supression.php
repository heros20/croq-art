<?php
if(!empty($_GET['id'])){
    $adminUrl = admin_url().'admin.php?page=delete&id='.$id;
    $id = $_GET['id'];
    global $wpdb;
    $table = $wpdb->prefix.'message';
    $table2 = $wpdb->prefix.'client';
    $sdl =  "SELECT * FROM $table WHERE id = $id ";
    $messages = $wpdb->get_results($sdl, ARRAY_A);
    $id_client = $reservations[0]['id_client'];
    $sql =  "SELECT * FROM $table2 WHERE id = $id_client ";
    $clients = $wpdb->get_results($sql, ARRAY_A);

    debug($messages);
    debug($clients);
    
// <?php 
}