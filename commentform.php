<!-- commentsform -->
<?php // Do not delete these lines
if ( ! defined('HABARI_PATH' ) ) { die( _t('Please do not load this page directly. Thanks!') ); }
?>
		<div class="comments entry-content">
			
<?php
if ( Session::has_messages() ) {
	Session::messages_out();
}
?>

			<form id="send-message" class="wide-10 skip-3 or-border-2 end" action="<?php URL::out('submit_feedback', array('id'=>$post->id)); ?>" method="post">
			
			<p class="intro wide-10 end">
			<strong>Leave a Comment</strong>
				Fill out the form below to leave a comment on the site. Comments may be moderated so if it doesn't appear immediately that is probably the case.
			</p>
			
			<div id="comment-personaldetails">
				<p>
				<input type="text" name="name" id="name" value="<?php echo $commenter_name; ?>" size="22" tabindex="1">
				<label for="name"><small><strong><?php _e('Name*'); ?></strong></small><span class="required"><?php if (Options::get('comments_require_id') == 1) : ?><?php endif; ?></span></label>
				</p>
				<p>
				<input type="text" name="email" id="email" value="<?php echo $commenter_email; ?>" size="22" tabindex="2">
				<label for="email"><small><strong><?php _e('Email*'); ?></strong> (<?php _e('will not be published'); ?>)</small><span class="required"><?php if (Options::get('comments_require_id') == 1) : ?><?php endif; ?></span></label>
				</p>
				<p>
				<input type="text" name="url" id="url" value="<?php echo $commenter_url; ?>" size="22" tabindex="3">
				<label for="url"><small><strong><?php _e('Website'); ?></strong></small></label>
				</p>
			</div>
			<p>
<textarea name="content" id="content" cols="100" rows="10" tabindex="4">
<?php echo $commenter_content; ?>
</textarea>
			</p>
			<p>
				<button id="submit-button" type="submit" tabindex="8"><span><?php _e('Submit'); ?></span></button>
			</p>
			
			<p class="legend wide-5 flow end">
				<span>Legend</span>
				* = Required
			</p>
			
			<span class="clear"></span>
			</form>
		</div>
<!-- /commentsform -->
