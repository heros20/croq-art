<?php

get_header();
?>

<?php
    while ( have_posts() ) :
    the_post(); ?>
    <div class="wrap B">
        <div class="menu">
            <h2><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?> </a></h2>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/etiqette.png" alt="">
            <div class="insideMenu">
                <p> <?= nl2br(get_the_content()) ?> </p>
            </div>
        </div>
    </div>
<?php	endwhile; // End of the loop.
 


get_footer();


