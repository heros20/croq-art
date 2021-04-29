<?php
/* Template Name: home  */
$slider = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$slider2 = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$presentation = array(
    'post_type' => 'presentation',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
get_header();
?>
<div class="bienvenue">
    <h2>Bienvenue au Croq'Art Café</h2>
</div>
<div class="B">
    <div class="B2">
        <ul>
            <?php
            $the_query = new WP_Query($presentation);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <li>
                        <div>
                            <p> <?= nl2br(get_the_excerpt()) ?> </p>
                        </div>
                    </li>
                <?php  } ?>
            <?php } ?>
        </ul>
    </div>
    <div class="flexslider">
        <ul class="slides">
            <?php
            $the_query = new WP_Query($slider);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                    <li>
                        <div class="BoiteImg">
                            <a href="<?= esc_url($featured_img_url) ?>" rel="lightbox">  <?= the_post_thumbnail(get_the_ID(), 'slider-img') ?> </a>
                        </div>
                    </li>
                <?php  } ?>
            <?php } ?>
        </ul>
    </div>
    <div class="afterSlider">
        <div class="after wrap4">
        <?php
            $the_query = new WP_Query($slider2);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                        <a href="<?= esc_url($featured_img_url) ?>" rel="lightbox">  <?= the_post_thumbnail(get_the_ID(), 'slider-img') ?> </a>
                <?php  } ?>
        <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php
get_footer();