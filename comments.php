<div id="comments" class="comments">
	<?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
	<h3>コメント</h3>
	<ol class="commets-list">
		<?php wp_list_comments( 'avatar_size=80' ); ?>
	</ol>
	<?php endif; ?>
	<?php $args = array(
		'title_reply' => 'Comments',
		'comment_notes_before' => '<p>コメント記入欄の上に表示するメッセージです</p>',
		'comment_notes_after'  => '<p>コメント記入欄の下に表示するメッセージです</p>',
		'label_submit' => '送信'
	);
	comment_form( $args ); ?>
    <?php paginate_comments_links( $args ); ?>
</div><!-- #comments -->