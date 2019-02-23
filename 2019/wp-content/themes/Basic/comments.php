<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Basic
 * @since Basic 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if(post_password_required()) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if(have_comments()): ?>
		<h2 class="comments-title">
			<?php
				comments_number( esc_html__( 'No Comments', 'Basic' ), esc_html__( 'One Comment', 'Basic' ), '% ' . esc_html__( 'Comments', 'Basic' ) );
			?>
		</h2>

		<ul class="comment-list">
		<?php wp_list_comments(array('callback' => 'cg_comments')); ?>
		</ul><!-- .comment-list -->

		<?php if(get_next_comments_link() || get_previous_comments_link()) { ?>
			<div class="comment-pagination">
				<?php esc_html_e('Comment Pages', 'Basic'); ?>:

				<?php
					$args = array(
						'prev_text' => '',
						'next_text' => ''
					);
					paginate_comments_links($args);
				?>
			</div>
		<?php } ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if(!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
	?>
		<p class="no-comments"><?php esc_html_e('Comments are closed.', 'Basic'); ?></p>
	<?php endif; ?>

	<?php
	$aria_req = ($req ? " aria-required='true'" : '');
	
	$args = array(
		'fields' => apply_filters(
			'comment_form_default_fields', array(
				'author' =>'<div class="comment-form-author"><div class="inner">' . '<input id="author" placeholder="' . esc_attr__('Name', 'Basic') . ' ' . ($req ? '*' : '') . '" name="author" type="text" value="' .
					esc_attr( $commenter['comment_author']) . '" size="30"' . $aria_req . ' /></div></div>'
					,
				'email'  => '<div class="comment-form-email"><div class="inner">' . '<input id="email" placeholder="' . esc_attr__('Email', 'Basic') . '' . ($req ? '*' : '') . '" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
			'" size="30"' . $aria_req . ' /></div></div>',
				'url'    => '<div class="comment-form-url"><div class="inner"><input id="url" name="url" placeholder="' . esc_attr__('Website', 'Basic') . '" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></div></div>',
			)
		),
		'comment_field' => '<div class="comment-form-comment"><textarea id="comment" name="comment" placeholder="' . esc_attr__('Comment', 'Basic') . '" cols="45" rows="4" aria-required="true"></textarea></div>',
	    'comment_notes_before' => '<p class="comment-notes">' . esc_html__('Your email address will not be published. Required fields are marked *', 'Basic') . '</p>',
	    'comment_notes_after' => '',
	    'title_reply' => esc_html__('Leave a Reply', 'Basic'),
	    'title_reply_to' => esc_html__('Leave a Reply to %s', 'Basic'),
	    'label_submit' => esc_html__('Submit', 'Basic'),
	);

	comment_form($args);
	?>

</div><!-- .comments-area -->