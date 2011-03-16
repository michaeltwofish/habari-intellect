<!-- comments -->

<div class="comments entry-content">
	<h3>Comments</h3>
	
	<h4 class="response-title"><?php echo $post->comments->moderated->count; ?> <?php _e('Responses'); ?></h4>

	<ol id="commentlist">

	<?php
	if ( $post->comments->moderated->count ) {
		foreach ( $post->comments->moderated as $comment ) {
	
			if ( $comment->url_out == '' ) {
				$comment_url = $comment->name_out;
			}
			else {
				$comment_url = '<a href="' . $comment->url_out . '" rel="external">' . $comment->name_out . '</a>';
			}
	
	?>
			<li id="comment-<?php echo $comment->id; ?>" class="comment">
				<strong class="commentauthor"><?php echo $comment_url; ?></strong>
				<small class="comment-meta"><a href="#comment-<?php echo $comment->id; ?>" title="<?php _e('Time of this Comment'); ?>"><?php $comment->date->out(); ?></a><?php if ( $comment->status == Comment::STATUS_UNAPPROVED ) : ?> <em><?php _e('In moderation'); ?></em><?php endif; ?></small>
	
				<div class="comment-content">
					<?php echo $comment->content_out; ?>
	
				</div>
			</li>
		<?php
			}
		?>
		</ol>
	<?php
	}
	else { ?>
		<p class="no-comments"><?php _e('There are currently no comments.'); ?></p>
	<?php
	}
	?>
		
<?php if ( ! $post->info->comments_disabled ) { include_once( 'commentform.php' ); } ?>

</div>
<!-- /comments -->
