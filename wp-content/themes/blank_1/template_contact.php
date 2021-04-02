<?php
/* Template Name: contact  */




$errors = array();
$success = false;


if (!empty($_POST['submitted'])) {
    // FAILLE XSS

    $nom = failleXSS('nom');
    $email = failleXSS('email');
    $phone = failleXSS('phone');
    $message = failleXSS('message');

    // fonction pour afficher les erreurs eventuelles
    $errors = validForm($errors, $nom, 'nom', 2, 50);
    $errors = validEmail($errors, $email, 'email', 2, 50);
    $errors = validPhone($errors, $phone, 'phone');
    $errors = validForm($errors, $message, 'message', 2, 1000);

    if (count($errors) == 0) {
        global $wpdb;
        $table = $wpdb->prefix .'message';
        $wpdb->insert(
            $table,
            array(
                'nom' => $nom,
                'email' => $email,
                'message' => $message,
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
if ($success == true) { ?>
    <div id="formincription">
        <p>Votre message à bien été transmis, nous vous recontacterons dans les plus bref delais</p>
    </div>

<?php } else { ?>
<div class="contact1">
    <p>Si vous souhaiter des renseignement,</p>
    <p>ou tout autre demande, nous vous invitons</p>
    <p>à nous laisser un message via ce formulaire</p>
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

        <label for="phone">Numero de telephone*</label>
        <input type="text" pattern="[0-9]{10}" name="phone" placeholder="Votre numéro..." value="<?php if (!empty($_POST['phone'])) {
                                                                                        echo $_POST['phone'];
                                                                                    } ?>"/>
        <div>
            <p><span class="error"><?php if (!empty($errors['phone'])) {
                                        echo $errors['phone'];
                                    } ?><span></p>
        </div>

        <label for="message">Message*</label>
        <textarea name="message" id="message" placeholder="Ecrivez ici..." value="<?php if (!empty($_POST['message'])) {
                                                                                        echo $_POST['message'];
                                                                                    } ?>" cols="80" rows="10"></textarea>
        <div>
            <p><span class="error"><?php if (!empty($errors['message'])) {
                                        echo $errors['message'];
                                    } ?><span></p>
        </div>

        <input type="submit" id="btn_submit" name="submitted" value="Envoyer">

    </form>
<?php } ?>

<div class="google">
   <iframe classe="googleMaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.5322446900996!2d0.3758619156881919!3d49.24735697932747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e1b71b8c7574f9%3A0xb9603141872afd40!2sLe%20Croq&#39;Art%20Caf%C3%A9!5e0!3m2!1sfr!2sfr!4v1617363592164!5m2!1sfr!2sfr" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="contact2">
    <div class="coordonnée">
        <h3>Coordonnée</h3>
        <p>02 77 73 01 74</p>
        <p>06 14 35 20 86</p>
        <p>06 15 79 08 03</p>
    </div>
    <div class="horaire">
        <h3>Horaire</h3>
        <p>lun.:	Fermé</p>
        <p>mar.:	Fermé</p>
        <p>mer.:	Fermé</p>
        <p>jeu.:	Fermé</p>
        <p>ven.:	08:30 – 14:00</p>
        <p>sam.:	08:30 – 14:00</p>
        <p>dim.:	08:30 – 14:00</p>
    </div>
    <div class="adresse">
        <h3>Adresse</h3>
        <p>29 Rue de l'Abbaye</p>
        <p>27260 Cormeilles</p>
        <p>France</p>
    </div>
</div>

<?php

get_footer();
