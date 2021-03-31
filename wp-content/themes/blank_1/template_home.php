<?php
/* Template Name: home  */

get_header();
?>
<div class="B">
    <h1>BIENVENUE</h1>
    <p>Sur la page Home</p>
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/Plan_de_travail.png" alt="logo du site">
            </li>
            <li>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/Plan_de_travail.png" alt="logo du site">
            </li>
            <li>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/Plan_de_travail.png" alt="logo du site">
            </li>
            <li>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/Plan_de_travail.png" alt="logo du site">
            </li>
        </ul>
    </div>
</div>

<?php
get_footer();
