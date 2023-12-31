<?php
get_header();
?>

	<div class="customDefaultPages">
    <div class="wrapper">

		<?php if ( have_posts() ) : ?>

			<div class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					// Remove for now @TODO
					// the_archive_description( '<div class="page-description">', '</div>' );
				?>
			</div><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			fia_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
