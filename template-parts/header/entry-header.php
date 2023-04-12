<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage FIA
 * @since 1.0.0
 */

$discussion = ! is_page() && fia_can_show_post_thumbnail() ? fia_get_discussion_data() : null; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php fia_posted_by(); ?>
	<?php fia_posted_on(); ?>
	<span class="comment-count">
		<?php
		if ( ! empty( $discussion ) ) {
			fia_discussion_avatars_list( $discussion->authors );
		}
		?>
		<?php fia_comment_count(); ?>
	</span>
	
</div><!-- .meta-info -->
<?php endif; ?>
