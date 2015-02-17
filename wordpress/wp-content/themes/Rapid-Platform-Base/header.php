<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rapidtesting
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rapidtesting' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-sidebar-container">
			<div id="header-sidebar" class="clearfix" role="complementary">
					
						<?php if ( is_active_sidebar( 'header-sidebar' ) ) : ?>

							<?php dynamic_sidebar( 'header-sidebar' ); ?>

						<?php else : ?>
							<!-- This content shows up if there are no widgets defined in the backend. -->
						<?php endif; ?>

			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
