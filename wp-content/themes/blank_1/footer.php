<?php
$adresse = array(
    'post_type' => 'footer',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'ASC'
);
?>
<div class="clear" style="margin-top:400px"></div>
<footer id="colophon" class="site-footer">
	<div class="grandFooter">
		<div class="site-info">
			<div class="logoFooter">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/Plan_de_travail.png" alt="logo du site">
			</div>
			<div class="contact">
			<?php
            $the_query = new WP_Query($adresse);
            // The Loop
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
					<h2> <?= get_the_title() ?> </h2>
                    <p> <?= nl2br(get_the_content()) ?> </p>
                <?php  } ?>
            <?php } ?>
			</div>
			<div class="reseau">
				<a target="_blank" href="https://www.facebook.com/Le-CroqArt-Caf%C3%A9-102927631507709/"><i class="fab fa-facebook"></i></a>
				<a target="_blank" href="https://actu.fr/normandie/cormeilles_27170/le-croq-art-cafe-a-ouvert-rue-de-l-abbaye-a-cormeilles_35556865.html"><i class="far fa-newspaper"></i></a>
				<a target="_blank" href="https://www.instagram.com/lecroqartcafe/"><i class="fab fa-instagram"></i></a>
			</div>
		</div><!-- .site-info -->
	</div><!-- .grandFooter -->

	<div class="copyright">
		<div class="accueil">
			<p><a href="<?= esc_url(home_url('/')) ?>">Accueil</a></p>
		</div>
		<div class="mention">
			<p><a href="<?= esc_url(home_url('mentions-legal')) ?>">Mention légal</a></p>
		</div>
		<div class="">
			<p><a href="<?= esc_url(home_url('politique')) ?>">Politique de confidentialité</a></p>
		</div>
	</div><!-- .copyright -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>