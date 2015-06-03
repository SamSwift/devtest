<div class="frontpage-header">
	<section id="welcome" class="wrapper" style="background:url('<?php if ( get_header_image() ) : header_image(); ?>') left center no-repeat; min-height:<?php echo esc_attr( get_custom_header()->height ); ?>px;">

		<?php endif; // End header image check. ?>

		<div class="welcome-message">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- .welcome-message !-->

	</section>
</div><!-- .frontpage-header !-->