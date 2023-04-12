<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage FIA
 * @since 1.0.0
 */

get_header();
?>
<section class="blogDetailSection">
	<div class="wrapper">
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
		?>
				<div class="blogDetailparent">
					<div class="postMainTitle">
						<h1><?php echo get_the_title($post->ID); ?></h1>
					</div>
					<?php
					$postImgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
					if(!empty($postImgurl)){
					?>
					<div class="postMainimg pt50">
						<img src="<?php echo $postImgurl ?>" />
					</div>
					<?php } ?>
					<div class="postMainContent pt50 fontWhite">
						<p><?php echo get_the_content($post->ID); ?></p>
					</div>
				</div>
		<?php
			}
		};
		?>
	</div>
</section>
<?php
get_footer();
