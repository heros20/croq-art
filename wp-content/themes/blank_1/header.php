<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank_1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Content-Type" content="UTF-8">
	<meta name="Content-Language" content="fr">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div class="nav">
			<header id="masthead" class="site-header">
				<div class="site-branding">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/Plan_de_travail.png" title="Le Croq Art Cafe" alt="logo du site">
				</div>
				<nav id="site-navigation" class="main-navigation">
					<ul>
						<li><a href="<?= esc_url(home_url('/')) ?>">Accueil</a></li>
						<li><a href="<?= esc_url(home_url('page-presentation')) ?>">Presentation</a></li>
						<li><a href="<?= esc_url(home_url('reservation')) ?>">Réservation</a></li>
						<li><a href="<?= esc_url(home_url('page-menu')) ?>">Menu</a></li>
						<li><a href="<?= esc_url(home_url('shop')) ?>">Click and collect</a></li>
						<li><a href="<?= esc_url(home_url('page-contact')) ?>">Contact</a></li>
						<li><a href="<?= esc_url(home_url('page-gallery')) ?>">Galerie</a></li>
						<li><a href="<?= esc_url(home_url('page-avis')) ?>">Avis</a></li>
					</ul>
				</nav>
				<i class="fas fa-bars" id="fa-bars" onclick="navHeader()"></i>
				<nav id="burger-navigation" class="main-burger-navigation">
					<div class="croix" onclick="croixHeader()">╳</div>
					<ul>
						<li><a href="<?= esc_url(home_url('/')) ?>">Accueil</a></li>
						<li><a href="<?= esc_url(home_url('page-presentation')) ?>">Presentation</a></li>
						<li><a href="<?= esc_url(home_url('reservation')) ?>">Réservation</a></li>
						<li><a href="<?= esc_url(home_url('page-menu')) ?>">Menu</a></li>
						<li><a href="<?= esc_url(home_url('shop')) ?>">Click and collect</a></li>
						<li><a href="<?= esc_url(home_url('page-contact')) ?>">Contact</a></li>
						<li><a href="<?= esc_url(home_url('page-gallery')) ?>">Galerie</a></li>
						<li><a href="<?= esc_url(home_url('page-avis')) ?>">Avis</a></li>
					</ul>
				</nav>
			</header>
		</div>
