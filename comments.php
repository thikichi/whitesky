<?php
if (post_password_required()) {
  return;
}
?>

<div class="comments-wrapper">
<?php if (have_comments()) :?>
  <h3 class="comments-count"><?php echo get_comments_number().' 件のコメント'; ?></h3>
  <ul class="comments-list">
  <?php wp_list_comments(array(
      'avatar_size'=>48,
      'style'=>'ul',
      'type'=>'comment',
      //'callback'=>'mytheme_comments'
    )); ?>
  </ul>
<?php if (get_comment_pages_count() > 1) : ?>
  <ul class="comments-pagination">
    <li class="prev-comments"><?php previous_comments_link('&lt;&lt; 前のコメント'); ?></li>
    <li class="next-comments"><?php next_comments_link('次のコメント &gt;&gt;'); ?></li>
  </ul>
<?php endif; endif; ?>
<?php comment_form(); ?>
</div><!-- comments -->