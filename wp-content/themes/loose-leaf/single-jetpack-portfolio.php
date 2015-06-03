<?php
/**
 * The template for displaying all single posts.
 *
 * @package Loose Leaf
 */

get_header(); ?>

	<div id="primary" class="content-area portfolio">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'portfolio-single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar( 'portfolio' ); ?>
<?php get_footer(); ?>
