<?php
/* Template Name: page-gallery  */
$gallery = array(
    'post_type' => 'gallery',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
get_header();
?>
<div class="bienvenue">
    <h1>Bienvenue dans la galerie</h2>
    <p>retrouver ici nos photos publiées</p>
</div>
<div class="B">
    <ul class="gallery">
        <?php
        $the_query = new WP_Query($gallery);
        if ($the_query->have_posts()) { ?>
            <?php while ($the_query->have_posts()) {
                $the_query->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                    <li>
                         <div class="Bimg">
                            <a href="<?= esc_url($featured_img_url) ?>" rel="lightbox">  <?= the_post_thumbnail('medium'); ?> </a>
                        </div>
                    </li>
            <?php  } ?>
        <?php } ?>
    </ul>
</div>
<?php
get_footer();