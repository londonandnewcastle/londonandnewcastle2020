<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package London_and_Newcastle_2020
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Crimson+Text|Quattrocento|Work+Sans&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site-wrap site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'londonandnewcastle2020' ); ?></a>

	<header class="site-header px4 py2 mb8 bg-opacity">
	<div class="mt2 wrap">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><?php bloginfo( 'name' ); ?></a>
		<nav id="site-navigation" class="main-navigation site-nav right">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			// if ( WC()->cart->get_cart_contents_count() == 0 ) {
			wp_nav_menu(
				array(
					'theme_location' => 'menu-shop',
					'menu_id'        => 'shop-primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<div class="clearfix"></div>
	</div>
	</header>
