<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #main div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Munsa Lite
 */

?>

				</main><!-- #main -->
			</div><!-- #primary -->
		
		</div><!-- #content -->
		
		<?php
			if ( is_page_template( 'pages/front-page.php' ) ) :
				get_template_part( 'misc/content', 'featured-areas' ); // Load featured areas for Front Page Template.
			endif;
		?>
		
		<?php // commented out by PH
			//get_sidebar( 'footer' ); // Loads the sidebar-footer.php template.
		 ?>
		
		<footer id="colophon" class="site-footer" role="contentinfo" <?php hybrid_attr( 'footer' ); ?>>
			
			
			<?php get_template_part( 'menus/menu', 'social' ); // Loads the menus/menu-social.php template. ?>
				
			<a href="#site-wrapper" id="scroll-up" class="scroll-up" data-scroll><span class="scroll-up-wrapper"><?php esc_html_e( 'Back to top', 'munsa-lite' ); ?></span></a>
		
		</footer><!-- #colophon -->
		
	</div><!-- #page -->
	
</div><!-- #site-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
