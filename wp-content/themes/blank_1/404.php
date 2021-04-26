<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blank_1
 */

get_header();
?>
<div class="b errorImg">
 <img src="<?= get_template_directory_uri(); ?>/assets/images/404.jpg" alt="">
</div>

<div class="b errorPage">
 <p>Aïe ! Cette page est introuvable.</p>
 <p>Il est possible que cette page ait été déplacer ou supprimer</p>
 <a href="<?= esc_url(home_url('/')) ?>">Nous vous invitons à retourner sur la page d'accueil</a>
</div>

<?php
get_footer();
