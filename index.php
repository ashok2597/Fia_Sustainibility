<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage FIA
 * @since 1.0.0
 */

get_header();
?>
<section class="pageMainSection">
	<div class="mainContentParent">
		<div class="wrapper">
			<?php
			if (have_posts()) {

				// Load posts loop.
				while (have_posts()) {
					the_post();
			?>
					<div class="postTitlemain">
						<h2><?php echo get_the_title($post->ID); ?></h2>
					</div>
					<div class="postMainimg">
						<?php echo get_the_post_thumbnail($post->ID); ?>
					</div>
					<div class="postMainContent">
						<p><?php echo get_the_content($post->ID); ?></p>
					</div>
			<?php
				}
				// Previous/next page navigation.
				fia_the_posts_navigation();
			} else {
				// If no content, include the "No posts found" template.
				get_template_part('template-parts/content/content', 'none');
			}
			?>
		</div>
	</div>
</section>
<?php
get_footer();
