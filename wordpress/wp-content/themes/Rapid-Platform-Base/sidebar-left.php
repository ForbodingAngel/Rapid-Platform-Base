<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package rapidtesting
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="widget-area secondary sidebar-left" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
</div></div>