<?php
/* Template Name: reservation  */
$errors = array();
$success = false;

if (!empty($_POST['submitted'])) {
    // FAILLE XSS

    $nom = failleXSS('nom');
    $email = failleXSS('email');
    $nbrecouvert = failleXSS('nbrecouvert');
    $date = failleXSS('date');
    $phone = failleXSS('phone');

    // fonction pour afficher les erreurs eventuelles
    $errors = validForm($errors, $nom, 'nom');
    $errors = validEmail($errors, $email, 'email', 2, 50);
    $errors = validNumber($errors, $nbrecouvert, 'nbrecouvert');
    $errors = validDate($errors, $date, 'date');
    $errors = validPhone($errors, $phone, 'phone');
    

    if (count($errors) == 0) {
        global $wpdb;
        $table = $wpdb->prefix .'reservation';
        $table2 = $wpdb->prefix.'client';
        $wpdb->insert(
            $table2,
            array(
                'nom' => $nom,
                'numero' => $phone,
                'email' => $email,
                'created_at' => current_time('mysql')
            ),
            array(
                '%s',
            )
        );
        $wpdb->insert(  
            $table,
            array(
                'id_client' => $wpdb->insert_id,
                'date&heure' => $date,
                'nbrecouvert' => $nbrecouvert,
                'created_at' => current_time('mysql')
            ),
            array(
                '%d',
                '%s',
            )
        );
        $success = true;
    }
}

get_header();
if($success == true){ ?>
    <div id="formincription">
         <p>Merci d'avoir réserver, nous vous confirmeront celle-ci dans les plus bref delais</p>
    </div>
<?php } else { ?>
<div class="reservation">
    <p>Afin de reserver une table dans notre restaurant,</p>
    <p>Merci de remplir le formulaire ci-dessous</p>
    <p>ou contacter nous directement par telephone au :</p>
    <p>02 77 73 01 74</p>
</div>
<form action="" id="formincription" method="POST" novalidate>

        <label for="nom">Nom*</label>
        <input type="text" id="nom" name="nom" placeholder="Votre nom..." value="<?php if (!empty($_POST['nom'])) {
                                                                                        echo $_POST['nom'];
                                                                                    } ?>">
        <div>
            <p><span class="error"><?php if (!empty($errors['nom'])) {
                                        echo $errors['nom'];
                                    } ?><span></p>
        </div>
        
        <label for="email">Email*</label>
        <input type="text" id="email" name="email" placeholder="Votre email..." value="<?php if (!empty($_POST['email'])) {
                                                                                            echo $_POST['email'];
                                                                                        } ?>">
        <div>
            <p><span class="error"><?php if (!empty($errors['email'])) {
                                        echo $errors['email'];
                                    } ?><span></p>
        </div>

        <label for="email">Email*</label>
        <input type="text" id="email" name="email" placeholder="Votre email..." value="<?php if (!empty($_POST['email'])) {
                                                                                            echo $_POST['email'];
                                                                                        } ?>">
        <div>
            <p><span class="error"><?php if (!empty($errors['email'])) {
                                        echo $errors['email'];
                                    } ?><span></p>
        </div>
        <label for="nbrecouvert">Nombre de personnes*</label>
        <input type="number" id="nbrecouvert" name="nbrecouvert" value="<?php if (!empty($_POST['nbrecouvert'])) {
                                                                                        echo $_POST['nbrecouvert'];
                                                                                    } ?>">
        <div>
            <p><span class="error"><?php if (!empty($errors['nbrecouvert'])) {
                                        echo $errors['nbrecouvert'];
                                    } ?><span></p>
        </div>

        <label for="date">Date et heure de reservation*</label>
        <input type="datetime-local" id="date" name="date">

        <div>
            <p><span class="error"><?php if (!empty($errors['date'])) {
                                        echo $errors['date'];
                                    } ?><span></p>
        </div>

        <label for="phone">Numero de telephone*</label>
        <input type="text" pattern="[0-9]{10}" name="phone" placeholder="Votre numéro..." value="<?php if (!empty($_POST['phone'])) {
                                                                                        echo $_POST['phone'];
                                                                                    } ?>"/>
        <div>
            <p><span class="error"><?php if (!empty($errors['phone'])) {
                                        echo $errors['phone'];
                                    } ?><span></p>
        </div>
        

        <input type="submit" id="btn_submit" name="submitted" value="Envoyer">

    </form>
<?php } ?>


<?php

get_footer();