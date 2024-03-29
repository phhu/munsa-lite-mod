<?php
/**
 * Footer Sidebar.
 *
 * @package Munsa Lite
 */
?>

<?php if ( is_active_sidebar( 'footer' ) ) : // If the sidebar has widgets. ?>

	<nav id="sidebar-footer" class="sidebar-footer sidebar" role="complementary" <?php hybrid_attr( 'sidebar', 'footer' ); ?>>
		<!--<h2 class="screen-reader-text" id="sidebar-footer-header"><?php /*echo esc_html_x( 'Footer Sidebar', 'Sidebar aria label', 'munsa-lite' );i*/ ?></h2>-->
		
		<div class="wrap">
		
			<?php dynamic_sidebar( 'footer' ); ?>
	
		</div><!-- .wrap -->

	</nav><!-- #sidebar-footer .sidebar -->

<?php endif; // End sidebar check.
