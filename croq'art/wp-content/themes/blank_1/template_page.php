<?php
/* Template Name: page  */
$args = array(
    'post_type' =>'page',
    'order' => 'DESC'
);
get_header();
?>

<h1>Page Page</h1>

<?php


$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>
        <div class="get"> 
            <li> <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?> </a> </li>
        </div>

   <?php  }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

get_footer();