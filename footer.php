<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JDLife
 */

?>

	</div><!-- #content -->

	<div id="pre-site-footer">
		<a href="#">Return to the top of the page</a>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div id="footer-widgets"><?php dynamic_sidebar( 'footer-1' ); ?></div>
	
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jdlife' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'jdlife' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'jdlife' ), 'jdlife', '<a href="http://johanndyck.com" rel="designer">Johann Dyck</a>' ); ?>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
