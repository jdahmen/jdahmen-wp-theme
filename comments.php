<div id="comment-head" class="row">
	<div class="col-md-12">
		<?php if ( have_comments() ) : ?>
				<h3 id="comments">
					<?php comments_number('No Comments', 'One Comment', '% Comments');?>
				</h3>
				<ul id="comment-list">
					<?php wp_list_comments('callback=custom_comments'); ?>
				</ul>
		<?php endif; ?>
	</div>
	<div id="comment-form-wrapper" class="col-md-12">
		<?php
			$comments_args = array(
					'label_submit' => 'Submit',
					'title_reply' => 'Post a comment',

					'comment_notes_after' => '',
					'comment_field' => '<div class="comment-form-comment action-wrapper">' . 
						'<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' . 
						'<label for="comment">' . _x( 'Comment', 'noun' ) . '</label></div>',
					'comment_notes_before' => '<div class="row"><div class="col-md-12"><p class="comment-notes">' . 
						__( 'Your email address will not be published.' ) . 
						( $req ? $required_text : '' ) . '</p></div></div>'
				);
			comment_form($comments_args);
		?>
	</div>
</div>