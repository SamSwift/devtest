<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Loose Leaf
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div id="tertiary" class="footer-widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div><!-- #tertiary !-->

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'looseleaf' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'looseleaf' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'looseleaf' ), 'Loose Leaf', '<a href="http://ryanscowles.com" rel="designer">Ryan Cowles</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
