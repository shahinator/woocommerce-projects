<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TeaDokan
 */

get_header();
global $teadokan_opt;
$url= $teadokan_opt['teadokan_blog_bg']['url'];
?>
<!-- Start Page Banner Here -->
<section class="section-padding bg-overlay page-banner blog-banner background-image" data-src="<?php echo esc_attr($url ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-header">
					<h2><?php teadokan_blog_header_details(); ?></h2>
				</div>
				<!-- Breadcrumb -->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url(' / '));?>"><?php esc_html_e('Home' , 'teadokan');?></a></li>
					<li class="breadcrumb-item active"><?php teadokan_blog_header_details(); ?></li>
				</ol>
				<!-- Breadcrumb -->
			</div>
		</div>
	</div>
</section>
<!-- Ends Page Banner Here -->
<!-- Start Blog Content Here -->
<section class="section-padding" id="blog-page-content">
	<div class="container">
		<div class="row">
		    <?php
				$class='';
				if ( is_active_sidebar( 'sidebar-1' ) ) : 				
				$class='col-md-9 col-md-push-3';
				else:
				$class='col-md-9 margin_auto';
				endif;
			?>
			<!-- Start Blog Content Here -->
			<div class="<?php echo esc_html($class);?>">
				<!-- Start Blog Post Content -->
				<div class="blog-post-content">
					<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', 'single' );
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							endwhile;?>										
							<?php
						else :
							get_template_part( 'template-parts/content', 'none' );

						endif;
					?>
				</div>
				<!-- Ends Blog Post Content -->				
			</div>
			<!-- Ends Blog Content Here -->			
			<!-- Start Side Bar Here -->
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
			<?php get_sidebar(); ?>
			<?php } ?>
			<!-- Ends Side Bar Here -->
		</div>
	</div>
</section>
<!-- Ends Blog Content Here -->
<?php
get_footer();
