<?php
/*
Template Name: Page With Breadcrumbs
*/

get_header(); ?>

	<?php
		if ( function_exists( 'yoast_breadcrumb' ) ) { ?>
			<div class="site-breadcrumbs">
				<?php yoast_breadcrumb(); ?>
			</div>
	<?php	}
	?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
