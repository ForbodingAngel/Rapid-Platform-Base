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

<div class="widget-area secondary secondary-nonresponsive" role="complementary" 
style="
/* Inline Styles are bad mmk? But in this case they are necessary because we want our pages to automagically work properly whether they have a sidebar or not */
float: right;
max-width: 29%;
width: 100%;
">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
</div></div>
<div style="clear:both"></div>
