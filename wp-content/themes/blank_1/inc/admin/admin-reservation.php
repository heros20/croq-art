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
        'dashicons-groups',
        // plugins_url( 'myplugin/images/icon.png' ),
        2
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
    $table2 = $wpdb->prefix.'client';
    $sdl =  "SELECT * FROM $table AS r
    LEFT JOIN $table2 AS c
    ON r.id_client = c.id
    ORDER BY r.created_at DESC";
    $reservations = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">Reservation</h1>
        <?php 
        if(!empty($_GET['id'])){
           $id = $_GET['id'];
           $wpdb->delete( $table, array( 'id' => $id ) );?>
           <p>La réservation à bien été supprimer</p>
           <?php 
        }else{ ?>
            <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>numero de telephone</th>
                    <th>Email</th>
                    <th>date et heure de reservation</th>
                    <th>nombre de couverts</th>
                    <th>reservation enregistrer le</th>
                    <th>moderation</th>
                    <th>Action</th>
                </tr>
                <?php 
                foreach ( $reservations as $reservation ) { 
                    if ($reservation['status'] == 'En attente') { ?>?>
                        <tr>
                            <td><?= $reservation['id'] ?></td>
                            <td><?= $reservation['nom'] ?></td>
                            <td><?= $reservation['numero'] ?></td>
                            <td><?= $reservation['email'] ?></td>
                            <td><?= date('d/m/Y à H:i',strtotime($reservation['date&heure'])) ?></td>
                            <td><?= $reservation['nbrecouvert'] ?></td>
                            <td><?= date('d/m/Y à H:i',strtotime($reservation['created_at'])) ?></td>
                            <td><a href="admin.php?page=custompage_moderation&id=<?= $reservation['id'] ?>"><?= $reservation['status'] ?></a></td>
                            <td><a href="<?= $adminUrl ?>&id=<?= $reservation['id'] ?>">supprimer</a></td>
                        </tr>
                    <?php }} ?>
            </table>
            <?php 
            
            foreach ($reservations as $reservation ) {
                 if ($reservation['status'] == 'validé') { ?>
                    <table class="wp-list-table widefat fixed striped table-view-list posts">
                        <tr>
                            <th>id</th>
                            <th>nom</th>
                            <th>numero de telephone</th>
                            <th>Email</th>
                            <th>date et heure de reservation</th>
                            <th>nombre de couverts</th>
                            <th>reservation enregistrer le</th>
                            <th>moderation</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><?= $reservation['id'] ?></td>
                            <td><?= $reservation['nom'] ?></td>
                            <td><?= $reservation['numero'] ?></td>
                            <td><?= $reservation['email'] ?></td>
                            <td><?= date('d/m/Y à H:i',strtotime($reservation['date&heure'])) ?></td>
                            <td><?= $reservation['nbrecouvert'] ?></td>
                            <td><?= date('d/m/Y à H:i',strtotime($reservation['created_at'])) ?></td>
                            <td><?= $reservation['moderation'] ?></td>
                            <td><a href="<?= $adminUrl ?>&id=<?= $reservation['id'] ?>">supprimer</a></td>
                        </tr>
                <?php 
                }
                else { ?>
                    <p>Aucunes reservations n'a été validées</p>
                <?php }
            } 
         } ?>
        
    </div>
   
<?php 
} ?>

