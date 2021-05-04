<?php
function wpdocs_register_my_custom_moderation_page(){
    add_menu_page( 
        __( 'moderation', 'textdomain' ),
        '',
        'manage_options',
        'custompage_moderation',
        'my_custom_menu_page_moderation',
        '',
        100
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_moderation_page' );
function my_custom_menu_page_moderation(){ 
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        global $wpdb;
        $table = $wpdb->prefix.'reservation';
        $table2 = $wpdb->prefix.'client';
        $sdl =  "SELECT * FROM $table WHERE id = $id ";
        $reservations = $wpdb->get_results($sdl, ARRAY_A);
        $id_client = $reservations[0]['id_client'];
        $sql =  "SELECT * FROM $table2 WHERE id = $id_client ";
        $clients = $wpdb->get_results($sql, ARRAY_A);
        $adminUrl = admin_url().'admin.php?page=custompage_moderation&id='.$id;
        $errors = array();
        $success = false;
        if (!empty($_POST['submitted'])) {
            $valid = failleXSS('valid');
            $errors = validSelect($errors,'valid');
            if (count($errors) == 0) {
                if ($_POST['valid'] === 'validé') {
                    $sql = $wpdb->query( $wpdb->prepare( "
                        UPDATE $table
                        SET status = %s
                        WHERE id = $id",
                        $valid
                    ) ); 
                      $entete  = 'MIME-Version: 1.0' . "\r\n";
                      $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                      $entete .= 'From: le Croq\'Art Café';

                      $messageClient = 
                        '<div style="background-color: #5f5e5e;color: burlywood;padding:15px;border-radius:5px;">
                        <h1 style="text-align:center">Le Croq\'Art Café</h1>
                        <p style="text-align:center;margin-bottom:5px">Votre demande de réservation a été confirmée<br>
                        <h2 style="text-align:center">VOTRE RESERVATION :</h2>
                        <p style="text-align:center;margin-bottom:5px"><b>Nom : </b>' . $clients[0]['nom'] . '<br>
                        <b style="text-align:center;margin-bottom:5px">Email : </b>' . $clients[0]['email'] . '<br>
                        <b style="text-align:center;margin-bottom:5px">téléphone : </b>' . $clients[0]['numero'] . '<br>
                        <b style="text-align:center;margin-bottom:5px">réservé pour le : </b>' . date('d/m/Y à H:i',strtotime($reservations[0]['hours'])) . '<br>
                        <b style="text-align:center;margin-bottom:5px">nombres de couverts : </b>' . $reservations[0]['nbrecouvert'] . '</p>
                        <p style="text-align:center;margin-bottom:10px">'.date('Y').'© Le Croq\'Art Café</p>
                        </div>';
                    
                      $retour = mail($clients[0]['email'], 'Le Croq\'Art Café', $messageClient, $entete);
                      if ( false === $sql ) { ?>
                        <p>La modification a echouée</p>
                    <?php }
                }elseif ($_POST['valid'] === 'refusé') {
                    $wpdb->delete( $table, array( 'id' => $id ) );
                    $entete2  = 'MIME-Version: 1.0' . "\r\n";
                    $entete2 .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                    $entete2 .= 'From: le Croq\'Art Café';

                    $messageClient = 
                    '<div style="background-color: #5f5e5e;color: burlywood;padding:15px;border-radius:5px;">
                    <h1 style="text-align:center">Le Croq\'Art Café</h1>
                    <h2 style="text-align:center">VOTRE RESERVATION :</h2>
                    <p style="text-align:center;margin-bottom:5px">votre réservation a malheureusement été refusée<br>
                    <p style="text-align:center;margin-bottom:5px">le restaurant doit certainement afficher complet ou doit etre fermer<br>
                    <p style="text-align:center;margin-bottom:5px"><b>Nom : </b>' . $clients[0]['nom'] . '<br>
                    <b style="text-align:center;margin-bottom:5px">Email : </b>' . $clients[0]['email'] . '<br>
                    <b style="text-align:center;margin-bottom:5px">téléphone : </b>' . $clients[0]['numero'] . '<br>
                    <b style="text-align:center;margin-bottom:5px">réservé pour le : </b>' . date('d/m/Y à H:i',strtotime($reservations[0]['hours'])) . '<br>
                    <b style="text-align:center;margin-bottom:5px">nombres de couverts : </b>' . $reservations[0]['nbrecouvert'] . '</p>
                    <p style="text-align:center;margin-bottom:10px">'.date('Y').'© Le Croq\'Art Café</p>
                    </div>';
                
                    $retour2 = mail($clients[0]['email'], 'Le Croq\'Art Café', $messageClient, $entete2);
                }
                $success = true;
                wp_safe_redirect('admin.php?page=custompage_reservation');
            }
        }
    }
?>
<form style="text-align:center;margin-top:200px;" action="" method="POST" novalidate>
    <div>
         <p style="font-size: 26px;">Valider, refuser ou supprimer la reservation</p>
    </div>
    <select style="font-size: 26px;padding: 0 100px;" name="valid" id="valid">
        <option value="validé">Validé</option>
        <option value="refusé">Refusé</option>
        <option value="refusé">Supprimer</option>
    </select>
    <p><span class="error"><?php if (!empty($errors['valid'])) { echo $errors['valid']; } ?><span></p>
    <input style="font-size: 26px;padding: 0 100px;" type="submit" name="submitted" value="Confirmer">
</form>

<?php }