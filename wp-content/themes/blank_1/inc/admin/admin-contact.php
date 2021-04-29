<?php
function wpdocs_register_my_custom_contact_page(){
    add_menu_page( 
        __( 'Contact', 'textdomain' ),
        'Message reçu',
        'manage_options',
        'custompage_contact',
        'my_custom_menu_page_contact',
        'dashicons-phone',
        3
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_contact_page' );
function my_custom_menu_page_contact(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_contact';
    global $wpdb;
    $table = $wpdb->prefix.'message';
    $table2 = $wpdb->prefix.'client';
    $sdl =  "SELECT m.id AS id,m.message,m.created_at,c.id AS id_client,c.nom,c.email,c.numero FROM $table AS m
    LEFT JOIN $table2 AS c
    ON m.id_client = c.id
    ORDER BY m.created_at DESC";
    $contacts = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">Contact</h1>
        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <tr>
                <th>nom</th>
                <th>email</th>
                <th>numero</th>
                <th>message</th>
                <th>date</th>
                <th>Action</th>
            </tr>
            <?php foreach ( $contacts as $contact ) { ?>
                <tr>
                    <td><?= $contact['nom'] ?></td>
                    <td><?= $contact['email'] ?></td>
                    <td><?= $contact['numero'] ?></td>
                    <td><?= $contact['message'] ?></td>
                    <td><?= date('d/m/Y à H:i',strtotime($contact['created_at'])) ?></td>
                    <td><a href="admin.php?page=custompage_contact&id=<?= $contact['id'] ?>">Supprimer</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
<?php } 
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        global $wpdb;
        $table = $wpdb->prefix.'message';
        $sdl =  "SELECT * FROM $table WHERE id = $id ";
        $message = $wpdb->get_results($sdl, ARRAY_A);

        $wpdb->delete( $table, array( 'id' => $id ) );
    }