<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TeaDokan
 */
global $teadokan_opt;
?>
<!-- Start Signle Blog Box -->
<div id="post-<?php the_ID(); ?>" <?php post_class("signle-blog-box"); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="blog-bg">
			<?php teadokan_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
		</div>
	<?php endif; ?>
	<div class="blog-content-box">
		<h3><?php the_title();?></h3>
		<div class="blog-meta">
			<span><a href="#"><i class="fa fa-user"></i> <?php the_author();?></a></span>
			<span><i class="fa fa-calendar"></i> <?php teadokan_posted_on();?></span>
			<span><i class="fa fa-folder"></i> <?php the_category( ', ' ); ?> </span>
			<span><i class="fa fa-comment" aria-hidden="true"></i><?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'No Comment');?></span>
		</div>		
		<?php the_content();?>	
	</div>
</div>
<!-- Ends Signle Blog Box -->
