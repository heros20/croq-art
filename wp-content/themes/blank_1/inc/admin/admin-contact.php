<?php
/** 
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_contact_page(){
    add_menu_page( 
        __( 'Contact', 'textdomain' ),
        'contact menu',
        'manage_options',
        'custompage_contact',
        'my_custom_menu_page_contact',
        'dashicons-phone',
        // plugins_url( 'myplugin/images/icon.png' ),
        3
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_contact_page' );
 
/** 
 * Display a custom menu page
 */
function my_custom_menu_page_contact(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_contact';
    global $wpdb;
    $table = $wpdb->prefix.'message';
    $table2 = $wpdb->prefix.'client';
    $sdl =  "SELECT * FROM $table AS m
    LEFT JOIN $table2 AS c
    ON m.id_client = c.id
    ORDER BY m.created_at DESC";
    $contacts = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">Contact</h1>
        <?php if(!empty($_GET['id'])){
           $id = $_GET['id'];
            $wpdb->delete( $table, array( 'id' => $id ) );?>
            <p>Le message à bien été supprimer</p>
            <?php }else{ ?>
            <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>email</th>
                    <th>numero</th>
                    <th>message</th>
                    <th>date</th>
                    <th>Action</th>
                </tr>
                <?php foreach ( $contacts as $contact ) { ?>
                    <tr>
                        <td><?= $contact['id'] ?></td>
                        <td><?= $contact['nom'] ?></td>
                        <td><?= $contact['email'] ?></td>
                        <td><?= $contact['numero'] ?></td>
                        <td><?= $contact['message'] ?></td>
                        <td><?= date('d/m/Y à H:i',strtotime($contact['created_at'])) ?></td>
                        <td><a href="<?= $adminUrl ?>&id=<?= $contact['id'] ?>">Supprimer</a></td>
                    </tr>
                    <?php } ?>
            </table>
        <?php } ?>
        
    </div>
   
<?php } ?>

