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
<div class="bienvenue B">
    <h2>Bienvenue au croq art cafe</h2>
</div>
<div class="B flex">
    <div class="flexslider">
        <ul class="slides">
            <?php
            $the_query = new WP_Query($slider);
            // The Loop
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                    <li>
                        <a href="<?= esc_url($featured_img_url) ?>" rel="lightbox">  <?= the_post_thumbnail('medium'); ?> </a>
                    </li>
                <?php  } ?>
            <?php } ?>
        </ul>
    </div>
</div>

<?php
get_footer();
