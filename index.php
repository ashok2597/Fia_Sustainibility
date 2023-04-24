<?php
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