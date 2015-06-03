<?php
/**
 * @package Loose Leaf
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php //echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'aligncenter' ) );
	 ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'looseleaf' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php looseleaf_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
