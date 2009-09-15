<?php $this->lang->module_load('comments', 'comments'); ?>
<?php if(!empty($comments)): ?>	<ul>
	<?php foreach($comments as $comment): ?>
		<!-- Comment -->
		<li class="comment">			<!-- Comment heading -->			<div class="comment_heading">				<strong class="comment_author"><?php echo $comment->name; ?></strong>				<p class="comment_date"><?php echo date('M d, Y', $comment->created_on); ?></p>			</div>			<!-- Comment body -->			<div class="comment_body">				<p><?php echo nl2br(stripslashes($comment->body));?></p>			</div>
		</li>
	<?php endforeach; ?>	</ul>
<?php else: ?>
	<p><?php echo lang('comments_no_comments');?></p>
<?php endif; ?>
