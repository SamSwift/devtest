<?php
/**
 * The template for displaying the front page.
 *
 * @package Loose Leaf
 */

get_header(); ?>

		<?php if ( is_home() ) {?>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
		<?php } ?>

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'content', 'home' );
					?>

				<?php endwhile; ?>

				<?php looseleaf_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			<?php if ( !is_home() ) {?>
				<div id="frontpage-widgets" class="wrapper">
					<?php dynamic_sidebar( 'frontpage-widgets' ); ?>
				</div><!-- #frontpage-widgets !-->
			<?php } ?>

			<?php if ( is_home() ) {?>
						</main><!-- #main -->
					</div><!-- #primary -->

				<?php get_sidebar(); ?>
			<?php } ?>

<?php get_footer(); ?>
