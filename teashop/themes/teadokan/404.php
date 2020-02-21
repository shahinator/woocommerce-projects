<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
					<h2><?php echo esc_html('404 Page','teadokan');?></h2>
				</div>
				<!-- Breadcrumb -->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url(' / '));?>"><?php esc_html_e('Home' , 'teadokan');?></a></li>
					<li class="breadcrumb-item active"><?php echo esc_html('404 Page','teadokan');?></li>
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
					<div class="error-page-content background-image" data-src="<?php echo esc_attr($url ); ?>">
						<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'teadokan' ); ?></h2>		
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'teadokan' ); ?></p>
							<?php
								get_search_form();						
							?>
						
					</div>	
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
