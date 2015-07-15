<?php
/*
Single Post Template: Post + Sidebar + Top Sidebar (When Responsive)
Description: Allows you to add the sidebar to individual posts
*/

get_header(); ?>

<?php
	if ( function_exists( 'yoast_breadcrumb' ) ) { ?>
		<div class="site-breadcrumbs">
			<?php yoast_breadcrumb(); ?>
		</div>
<?php	}
?>

<?php get_template_part( 'sidebar-responsive' ); ?>

	<div id="primary" class="content-area with-right-sidebar">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part( 'sidebar' ); ?>
<?php get_footer(); ?>
