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
<div class="contact">
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


<?php

get_footer();
