<?php
/**
 * The Secondary Sidebar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magazine_Plus
 */

?>
<?php $default_sidebar = apply_filters( 'magazine_plus_filter_default_sidebar_id', 'sidebar-2', 'secondary' ); ?>
<div id="sidebar-secondary" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $default_sidebar ) ) : ?>
		<?php dynamic_sidebar( $default_sidebar ); ?>
	<?php else : ?>
		<?php
			/**
			 * Hook - magazine_plus_action_default_sidebar.
			 */
			do_action( 'magazine_plus_action_default_sidebar', $default_sidebar, 'secondary' );
		?>
	<?php endif; ?>
</div><!-- #sidebar-secondary -->
