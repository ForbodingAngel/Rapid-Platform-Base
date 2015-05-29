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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/site-specific-styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
<script>
    $(window).load(function(){
      $(".stickynav").sticky({ topSpacing: 0 });
    });
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rapidtesting' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-sidebar-container">
			<div class="header-menu-above">
			<?php if ( is_active_sidebar( 'header-menu-above' ) ) : ?>

				<?php dynamic_sidebar( 'header-menu-above' ); ?>

			<?php else : ?>
				<!-- This content shows up if there are no widgets defined in the backend. -->
			<?php endif; ?>
			</div>
			<div id="header-sidebar" class="clearfix" role="complementary">
				<?php if ( is_active_sidebar( 'header-sidebar' ) ) : ?>

					<?php dynamic_sidebar( 'header-sidebar' ); ?>

				<?php else : ?>
					<!-- This content shows up if there are no widgets defined in the backend. -->
				<?php endif; ?>						
			</div>
			<div class="header-menu-below">
				<?php if ( is_active_sidebar( 'header-menu-below' ) ) : ?>

					<?php dynamic_sidebar( 'header-menu-below' ); ?>

				<?php else : ?>
					<!-- This content shows up if there are no widgets defined in the backend. -->
				<?php endif; ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
