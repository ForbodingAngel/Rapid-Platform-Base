<?php
/*
Template Name: Landing Page Without Breadcrumbs + Right/Bottom Sidebar
*/

get_header(); ?>

	<div id="primary" class="content-area with-right-sidebar">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'landing' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_template_part( 'sidebar-responsive' ); ?>

<?php get_template_part( 'sidebar' ); ?>
<?php get_footer(); ?>
