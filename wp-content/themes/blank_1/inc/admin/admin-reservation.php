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
    $sdl =  "SELECT r.id AS id,c.id AS id_client,r.nbrecouvert,r.hours,r.status,r.created_at,c.nom,c.email,c.numero FROM $table AS r
    LEFT JOIN $table2 AS c
    ON r.id_client = c.id
    ORDER BY r.created_at DESC";
    $reservations = $wpdb->get_results($sdl, ARRAY_A);
    debug($reservations);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">Reservation</h1>
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
                </tr>
                <?php 
                foreach ( $reservations as $reservation ) { 
                    if (empty($reservation['status'])) { ?>
                        <tr>
                            <td><?= $reservation['id'] ?></td>
                            <td><?= $reservation['nom'] ?></td>
                            <td><?= $reservation['numero'] ?></td>
                            <td><?= $reservation['email'] ?></td>
                            <td><?= date('d/m/Y à H:i',strtotime($reservation['hours'])) ?></td>
                            <td><?= $reservation['nbrecouvert'] ?></td>
                            <td><?= date('d/m/Y à H:i',strtotime($reservation['created_at'])) ?></td>
                            <td><a href="admin.php?page=admin_moderation&id=<?= $reservation['id'] ?>">En attente</a></td>
                        </tr>
                    <?php }} ?>
            </table>
            <?php 
            if (empty($reservations[0]['status'])) { ?>
                <p>il y a des reservation en attente</p>
            <?php } ?>
            <div class="box" style="margin:100px"></div>
            <table class="wp-list-table widefat fixed striped table-view-list posts">
                        <tr>
                            <th>id</th>
                            <th>nom</th>
                            <th>numero de telephone</th>
                            <th>Email</th>
                            <th>date et heure de reservation</th>
                            <th>nombre de couverts</th>
                            <th>reservation enregistrer le</th>
                            <th>status</th>
                        </tr>
            <?php
            foreach ($reservations as $reservation ) {
                 if ($reservation['status'] == 'validé') { ?>
                        <tr>
                            <td><?= $reservation['id'] ?></td>
                            <td><?= $reservation['nom'] ?></td>
                            <td><?= $reservation['numero'] ?></td>
                            <td><?= $reservation['email'] ?></td>
                            <td><?= date('d/m/Y à H:i',strtotime($reservation['hours'])) ?></td>
                            <td><?= $reservation['nbrecouvert'] ?></td>
                            <td><?= date('d/m/Y à H:i',strtotime($reservation['created_at'])) ?></td>
                            <td>Validé</td>
                        </tr>
                <?php 
                }
            } ?>
            </table>
        
    </div>
   
<?php 
} ?>

