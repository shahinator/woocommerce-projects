<?php
	class Cleanhit_Comment_Walker extends Walker_Comment {
		var $tree_type = 'comment';
		var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );
		function __construct() { ?>
		<div class="comment_widget">
		<?php }
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>			
			<div class="children">
		<?php }
		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>
			</div>

		<?php }
		function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
			$depth++;
			$GLOBALS['comment_depth'] = $depth;
			$GLOBALS['comment'] = $comment;
			$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); 
	
			if ( 'article' == $args['style'] ) {
				$tag = 'article';
				$add_below = 'comment';
			} else {
				$tag = 'article';
				$add_below = 'comment';
			} ?>

			<div <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>"><<?php echo esc_html($tag); ?> <?php comment_class( $this->has_children ? 'parent media' : 'media' ); ?>>
			<?php if ( 0 != $args['avatar_size'] ): ?>
			<div class="pull-left">
				<a href="<?php echo get_comment_author_url(); ?>" class="media-object">
					<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
				</a>
			</div>
			<?php endif; ?>
			<div class="media-body text">
				<div class="comment-meta post-meta" role="complementary">
					<div class="meta">
						<a href="<?php echo comment_author_url() ?>" class="meta-author">
							<b><?php echo comment_author() ?></b>
						</a>
						<span class="meta-date">
							<i class="icon icon-time"></i><?php echo get_comment_date(get_option('date_format')) ?> 
						</span>
					</div>
					<?php if ($comment->comment_approved == '0') : ?>
					<p class="comment-meta-item"><?php echo esc_html('Your comment is awaiting moderation.','cleanhit'); ?></p>
					<?php endif; ?>
				</div>
				<div class="comment-content">
					<?php comment_text() ?>
					<ul class="list-inline">
						<?php comment_reply_link(array_merge( $args, array(
									'add_below' => $add_below, 
									'depth' => $depth, 
									'max_depth' => $args['max_depth'],
									'before'    => '<li class="reply"><i class="icon-forward-left"></i> ',
									'after'     => '</li>'
									)
								)
							) 
						?>
					</ul>
				</div>
			</div>
             </<?php echo esc_html($tag); ?>>
		<?php }
		function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>
			</div>
		<?php }
		function __destruct() { ?>
			</div>
		<?php }
	}
?>