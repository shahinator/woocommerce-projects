<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
					<h2><?php printf(esc_html__('%s', 'teadokan'), get_search_query()); ?></h2>
				</div>
				<!-- Breadcrumb -->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url(' / '));?>"><?php esc_html_e('Home' , 'teadokan');?></a></li>
					<li class="breadcrumb-item active"><?php printf(esc_html__('%s', 'teadokan'), get_search_query()); ?></li>
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
							if ( is_home() && ! is_front_page() ) :								
							endif;
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();								
								get_template_part( 'template-parts/content', 'serach' );
							endwhile;
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
