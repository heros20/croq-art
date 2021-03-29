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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <div class="nav">
	<header id="masthead" class="site-header">
		<div class="site-branding">
	    
		</div><!-- .site-branding -->
        
			<nav id="site-navigation" class="main-navigation">
				<ul>
					<li><a href="<?= esc_url(home_url('/')) ?>">Home</a></li>
				</ul>
			</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
  </div> <!-- .nav -->
