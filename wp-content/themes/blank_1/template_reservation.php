<?php
/* Template Name: reservation  */
$errors = array();
$success = false;

if (!empty($_POST['submitted'])) {
    // FAILLE XSS

    $nom = failleXSS('nom');
    $nbrecouvert = failleXSS('nbrecouvert');
    $date = failleXSS('date');
    $phone = failleXSS('phone');

    // fonction pour afficher les erreurs eventuelles
    $errors = validForm($errors, $nom, 'nom');
    $errors = validNumber($errors, $nbrecouvert, 'nbrecouvert');
    $errors = validDate($errors, $date, 'date');
    $errors = validPhone($errors, $phone, 'phone');
    

    if (count($errors) == 0) {
        global $wpdb;
        $table = $wpdb->prefix .'reservation';
        $wpdb->insert(
            $table,
            array(
                'nom' => $nom,
                'nbrecouvert' => $nbrecouvert,
                'date&heure' => $date,
                'numero' => $phone,
                'created_at' => current_time('mysql')
            ),
            array(
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
<?php } else{ ?>
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