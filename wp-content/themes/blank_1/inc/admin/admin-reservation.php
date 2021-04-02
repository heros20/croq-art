<?php
/** 
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_reservation_page(){
    add_menu_page( 
        __( 'reservation', 'textdomain' ),
        'reservation menu',
        'manage_options',
        'custompage_reservation',
        'my_custom_menu_page_reservation',
        'dashicons-email-alt',
        // plugins_url( 'myplugin/images/icon.png' ),
        60
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_reservation_page' );
 
/** 
 * Display a custom menu page
 */
function my_custom_menu_page_reservation(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_reservation';
    global $wpdb;
    $table = $wpdb->prefix.'reservation';
    $sdl =  "SELECT * FROM $table ORDER BY created_at DESC";
    $reservations = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">Reservation</h1>
        <?php if(!empty($_GET['id'])){
           $id = $_GET['id'];
           $reservations = $wpdb->get_row(
            $wpdb->prepare(   
            "SELECT * FROM $table WHERE id = %d",
            $id        
            ),ARRAY_A ); ?>
            <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>date et heure de reservation</th>
                    <th>numero de telephone</th>
                    <th>nombre de couverts</th>
                    <th>reservation enregistrer le</th>

                </tr>
                <tr>
                    <td><?= $reservations['id'] ?></td>
                    <td><?= $reservations['nom'] ?></td>
                    <td><?= date('d/m/Y à H:i',strtotime($reservations['date&heure'])) ?></td>
                    <td><?= $reservations['numero'] ?></td>
                    <td><?= $reservations['nbrecouvert'] ?></td>
                    <td><?= date('d/m/Y à H:i',strtotime($reservations['created_at'])) ?></td>
                 </tr>
            </table>
            
        <?php  }else{ ?>
            <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                <th>id</th>
                    <th>nom</th>
                    <th>date et heure de reservation</th>
                    <th>numero de telephone</th>
                    <th>nombre de couverts</th>
                    <th>reservation enregistrer le</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                <?php foreach ( $reservations as $reservation ) { ?>
                    <tr>
                    <td><?= $reservation['id'] ?></td>
                    <td><?= $reservation['nom'] ?></td>
                    <td><?= date('d/m/Y à H:i',strtotime($reservation['date&heure'])) ?></td>
                    <td><?= $reservation['numero'] ?></td>
                    <td><?= $reservation['nbrecouvert'] ?></td>
                    <td><?= date('d/m/Y à H:i',strtotime($reservation['created_at'])) ?></td>
                    <td><a href="<?= $adminUrl ?>&id=<?= $reservation['id'] ?>">Detail</a></td>
                    <td><a href="<?= $adminUrl ?>&id=<?= $reservation['id'] ?>">supprimer</a></td>
                    </tr>
                    <?php } ?>
            </table>
        <?php } ?>
        
    </div>
   
<?php } ?>

