<?php
/* Template Name: page-presentation  */
$presentation = array(
    'post_type' => 'presentation',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
get_header();
?>
<div class="B wrap2">

    <!-- <div class="cafe"><img src="<?= get_template_directory_uri(); ?>/assets/images/café.jpg" alt="café"></div> -->
    <ul class="contact2">
        <?php
        $the_query = new WP_Query($presentation);
        // The Loop
        if ($the_query->have_posts()) { ?>
            <?php while ($the_query->have_posts()) {
                $the_query->the_post(); ?>
                <li>
                    <div class="coordonnée">
                        <p> <?= nl2br(get_the_content()) ?> </p>
                    </div>
                </li>
            <?php  } ?>
        <?php } ?>
    </ul>
    <!-- <div class="food">
        <div class="food food1"><img src="<?= get_template_directory_uri(); ?>/assets/images/food1.jpg" alt="food1"></div>
        <div class="food food2"><img src="<?= get_template_directory_uri(); ?>/assets/images/food2.jpg" alt="food2"></div>
        <div class="food food3"><img src="<?= get_template_directory_uri(); ?>/assets/images/food3.jpg" alt="food3"></div>
    </div> -->
</div>

<?php
get_footer();
