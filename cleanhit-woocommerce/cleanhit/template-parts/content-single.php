<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cleanhit
 */
?>

<div  id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 single-blog'); ?>>
	<div class="blog-col">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="blog-img">
				<?php cleanhit_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
				<div class="read-more-icon">
					<a href="<?php the_permalink();?>">
						<i class="fa fa-long-arrow-right"></i>
					</a>
				</div>
				<ul>
					<li><i class="fa fa-calendar"></i> <?php cleanhit_posted_on();?></li>
					<li><i class="fa fa-comments-o"></i> <?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'No Comment');?></li>
				</ul>
			</div>
		<?php endif; ?>
		<div class="blog-text">
			<div class="blog-meta">
				<span><a href="#"><i class="fa fa-user"></i> <?php the_author();?></a></span>
				<span><i class="fa fa-folder"></i> <?php the_category( ', ' ); ?> </span>
				<span>	
				<?php 
					$tag=get_the_tags( get_the_ID() );
					if(!empty($tag)){
						echo '<i class="fa fa-tag" aria-hidden="true"></i>'. get_the_tag_list('',' , ');
					}
					?>
				</span>
			</div>
			<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
			<?php the_content();?>					
		</div>
	</div>
	<?php 
		if(function_exists('cleanhit_social_share')){
			cleanhit_social_share();    
		} 
	?>

</div>
<!-- #post-<?php the_ID(); ?> -->
