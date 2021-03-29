<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
        the_post();
        ?>
        <div class="get">
            <h1>Voici le details du livre : <?= get_the_title() ?></h1>
            <p>et son contenu :</p>
            <p><?= nl2br(get_the_content()) ?> </p>
        </div>
		 
    	<?php	endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
