<?php
/* Template Name: blog  */
$args = array(
    'post_type' =>'post',
    'post_status' =>'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
);
get_header();
?>

<h1>Page Blog</h1>
<p>Vous êtes bien arrivé</p>

<?php


$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>
        <div class="get"> 
            <li> <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?> </a></li>
            <li> <p class="gett"><?= nl2br(get_the_content()) ?></p> </li>
        </div>

   <?php  }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();


get_footer();