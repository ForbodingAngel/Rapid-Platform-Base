<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rapidtesting
 */
?>

		</div><!-- #content -->
	</div> <!-- content-container -->
	<div style="clear:both"></div>
	
	<div class="footer-container">
		<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div id="footer-sidebar-container">
			<div id="footer-sidebar" class="clearfix" role="complementary">
					
						<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>

							<?php dynamic_sidebar( 'footer-sidebar' ); ?>

						<?php else : ?>
							<!-- This content shows up if there are no widgets defined in the backend. -->
						<?php endif; ?>

			</div>
		</div>
		<div style="clear:both"></div>
		
		<?php get_template_part( socialmediabar ); ?>
		
			<div class="site-info">
				<div id="site-info-widget" class="clearfix" role="complementary">
					
						<?php if ( is_active_sidebar( 'site-info' ) ) : ?>

							<?php dynamic_sidebar( 'site-info' ); ?>

						<?php else : ?>
							<!-- This content shows up if there are no widgets defined in the backend. -->
						<?php endif; ?>

				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
