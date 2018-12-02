<?php
/*
Template Name: Landing Page With Postlists
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="landing-post-listing">
			<h2>Evolution RTS News</h2>
			<?php
			global $post;
			$args = array( 'posts_per_page' => 4 );
			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
				<a href="<?php the_permalink(); ?>"><div class="post-entry entry-content">
				<?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
				<h3><?php the_title(); ?></h3>
				<?php $post_date = get_the_date( 'F j, Y' ); ?>
				<p><strong>Posted on: </strong><i><?php echo $post_date; ?></i></p>
				<?php the_excerpt(); ?>
				</div></a>
			<?php endforeach; 
			wp_reset_postdata(); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
