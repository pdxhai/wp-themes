<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php echo get_comments_number(); ?> Comments
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 50,
					'style'       => 'ul',
					'short_ping'  => true,
					'reply_text'  => 'Reply',
				) );
			?>
		</ul>

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'odg' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'odg' ) . '</span>',
		) );

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'odg' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->
