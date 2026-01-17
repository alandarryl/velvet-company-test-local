<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package velvet-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-wrapper">


<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'velvet-theme' ); ?></a>


<header class="site-header">
	<div class="header-inner">

		<h2 class="site-branding">
			<span>VELVET</span>
			<span>COMPANY</span>
		</h2>

		<nav class="main-navigation">
		<?php
			wp_nav_menu([
			'theme_location' => 'main-menu',
			'container' => false,
			]);
		?>
		</nav>

		<button href="<?php echo get_permalink( get_page_by_title('Contact / Booking') ); ?>" class="reserve-btn">
			Réserver
		</button>

	</div>
</header>
