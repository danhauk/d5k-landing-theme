<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package d5k
 */

if ( ! is_active_sidebar( 'landing-page-widgets' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'landing-page-widgets' ); ?>
</div><!-- #secondary -->
