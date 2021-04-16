<?php
/** 
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_click_and_collect_page(){
    add_menu_page( 
        __( 'Click and collect', 'textdomain' ),
        'click and collect menu',
        'manage_options',
        'custompage_click_and_collect',
        'my_custom_menu_page_click_and_collect',
        'dashicons-products',
        // plugins_url( 'myplugin/images/icon.png' ),
        4
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_click_and_collect_page' );
 
/** 
 * Display a custom menu page
 */
function my_custom_menu_page_click_and_collect(){ 
    $adminUrl = admin_url().'admin.php?page=custompage_click_and_collect';
    global $wpdb;
    $table = $wpdb->prefix.'c&c';
    $table2 = $wpdb->prefix.'client';
    $table3 = $wpdb->prefix.'plats';
    $sdl =  "SELECT * FROM $table AS c&c
    LEFT JOIN $table2 AS c
    ON c&c.id_client = c.id
    LEFT JOIN $table3 AS p
    ON c&c.id_plats = p.id
    ORDER BY created_at DESC";
    $click_collects = $wpdb->get_results($sdl, ARRAY_A);
    ?>
    <div class="wrap contact-wrap">
        <h1 class="wp-heading-inline">Click and collect</h1>
        <?php 
        // if(!empty($_GET['id'])){
        //    $id = $_GET['id'];
        //    $wpdb->delete( $table, array( 'id' => $id ) );
        ?>
           <!-- <p>La réservation à bien été supprimer</p> -->
           <?php
            // }else{ 
               ?>
            <table class="wp-list-table widefat fixed striped table-view-list posts">
                <tr>
                <th>id</th>
                    <th>nom</th>
                    <th>date et heure de reservation</th>
                    <th>numero de telephone</th>
                    <th>nombre de couverts</th>
                    <th>reservation enregistrer le</th>
                    <th>moderation</th>
                    <th>Action</th>
                </tr>
                <?php foreach ( $click_collects as $click_collect ) { ?>
                <tr>
                    <td><?= $click_collect['id'] ?></td>
                    <td><?= $click_collect['nom'] ?></td>
                    <td><?= date('d/m/Y à H:i',strtotime($click_collect['date&heure'])) ?></td>
                    <td><?= $click_collect['numero'] ?></td>
                    <td><?= $click_collect['nbrecouvert'] ?></td>
                    <td><?= date('d/m/Y à H:i',strtotime($click_collect['created_at'])) ?></td>
                    <td>en attente de moderation</td>
                    <td><a href="<?= $adminUrl ?>&id=<?= $click_collect['id'] ?>">supprimer</a></td>
                </tr>
                <?php } ?>
            </table>
        <?php 
    // } 
    ?>
        
    </div>
<?php } ?>