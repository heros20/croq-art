<?php
/* Template Name: contact  */




$errors = array();
$success = false;


if (!empty($_POST['submitted'])) {
    // FAILLE XSS

    $sujet = failleXSS('sujet');
    $email = failleXSS('email');
    $message = failleXSS('message');

    // fonction pour afficher les erreurs eventuelles
    $errors = validForm($errors, $sujet, 'sujet', 2, 50);
    $errors = validEmail($errors, $email, 'email', 2, 50);
    $errors = validForm($errors, $message, 'message', 2, 1000);

    // if (count($errors) == 0) {
    //     global $wpdb;
    //     $table = $wpdb->prefix . 'contact';
    //     $wpdb->insert(
    //         $table,
    //         array(
    //             'email' => $email,
    //             'sujet' => $sujet,
    //             'message' => $message,
    //             'created_at' => current_time('mysql')
    //         ),
    //         array(
    //             '%s',
    //         )
    //     );
    //     $success = true;
    // }
}
get_header();
if ($success == true) { ?>
     <p>Bravo, formulaire soumis</p>
 <?php } else { ?>
  <?php } ?>
    <form action="" method="POST" novalidate>
        <label for="email">Email*</label>
        <input type="text" id="email" name="email" placeholder="Votre email..." value="<?php if (!empty($_POST['email'])) {echo $_POST['email']; } ?>">
        <p><span class="error"><?php if (!empty($errors['email'])) { echo $errors['email'];} ?><span></p>

        <label for="sujet">Sujet*</label>
        <input type="text" id="sujet" name="sujet" placeholder="Votre sujet..." value="<?php if (!empty($_POST['sujet'])) { echo $_POST['sujet'];} ?>">
        <p><span class="error"><?php if (!empty($errors['sujet'])) { echo $errors['sujet']; } ?><span></p>

        <label for="message">Message*</label>
        <textarea name="message" id="message" placeholder="Ecrivez ici..." value="<?php if (!empty($_POST['message'])) { echo $_POST['message']; } ?>" cols="80" rows="10"></textarea>
        <p><span class="error"><?php if (!empty($errors['message'])) { echo $errors['message'];} ?><span></p>

        <input type="submit" name="submitted" value="Envoyer">

    </form>




<?php

get_footer();
