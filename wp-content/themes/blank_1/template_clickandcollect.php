<?php
/* Template Name: clickandcollect  */
$click = array(
    'post_type' => 'clickandcollect',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
get_header();
?>

<div class="wrap B">
        <ul class="click">
            <?php
            $the_query = new WP_Query($click);
            // The Loop
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <li>
                        <div class="menu">
                            <a href="<?= get_the_permalink() ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/etiqette.png" alt="">
                                <div class="insideMenu">
                                    <h2> <?= get_the_title() ?> </h2>
                                    <p> <?= nl2br(get_the_content()) ?> </p>
                                </div>
                            </a> 
                        </div>
                    </li>
                <?php  } ?>
            <?php } ?>
        </ul>
</div>
<div class="clear"></div>

<?php
get_footer();