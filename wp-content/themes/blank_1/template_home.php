<?php
/* Template Name: home  */
$slider = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
get_header();
?>
<div class="B">
    <div class="flexslider">
        <ul class="slides">
            <?php
            $the_query = new WP_Query($slider);
            // The Loop
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); ?>
                    <li>
                        <img src="<?= $image ?>" alt="<?= get_the_title() ?>">
                    </li>
                <?php  } ?>
            <?php } ?>
        </ul>
    </div>
</div>

<?php
get_footer();
