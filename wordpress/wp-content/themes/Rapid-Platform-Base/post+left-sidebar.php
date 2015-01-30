<?php
/*
Single Post Template: Post + Left Sidebar
Description: Allows you to add the sidebar to individual posts
*/

get_header(); ?>
<?php get_template_part( 'sidebar-left' ); ?>

	<div id="primary" class="content-area with-left-sidebar">
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

<?php get_footer(); ?>
