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
<div class="B wrap2 presentation">
    <ul class="contact2">
        <?php
        $the_query = new WP_Query($presentation);
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
</div>
<?php
get_footer();
