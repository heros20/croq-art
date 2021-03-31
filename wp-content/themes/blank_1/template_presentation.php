<?php
/* Template Name: presentation  */

get_header();
?>
<div class="B">

    <div class="cafe"><img src="<?= get_template_directory_uri(); ?>/assets/images/café.jpg" alt="café"></div>
    <p>Le Croq'Art Café, vous propose :</p>
    <p>Des croques, des tartines, des omelettes, des salades</p>
    <p>Mais également de belles planches à partager entre amis.</p>
    <p>Nous proposons aussi de belles patisseries</p>
    <p>à déguster avec une tasse de thé durant l'après midi.</p>
    <div class="food">
        <div class="food food1"><img src="<?= get_template_directory_uri(); ?>/assets/images/food1.jpg" alt="food1"></div>
        <div class="food food2"><img src="<?= get_template_directory_uri(); ?>/assets/images/food2.jpg" alt="food2"></div>
        <div class="food food3"><img src="<?= get_template_directory_uri(); ?>/assets/images/food3.jpg" alt="food3"></div>
    </div>
</div>

<?php
get_footer();
