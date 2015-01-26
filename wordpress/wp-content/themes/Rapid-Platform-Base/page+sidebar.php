<?php
/*
Template Name: Page + Sidebar
*/

get_header(); ?>
<?php get_template_part( 'sidebar-responsive' ); ?>

	<div id="primary" class="content-area" style="
/* Inline Styles are bad mmk? But in this case they are necessary because we want our pages to automagically work properly whether they have a sidebar or not */
float: left;
max-width: 69%;
width: 100%;
">
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

<?php get_template_part( 'sidebar' ); ?>
<?php get_footer(); ?>
