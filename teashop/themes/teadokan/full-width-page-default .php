<?php
/**
 * The template for displaying all pages
 * Template Name: Full Width Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teadokan
 */

$url = wp_get_attachment_url( get_post_thumbnail_id() );  
get_header();

?>
<!-- Start Page Banner Here -->
<section class="section-padding bg-overlay page-banner blog-banner background-image" data-src="<?php echo esc_attr($url ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-header">
					<h2><?php the_title()?></h2>
				</div>
				<!-- Breadcrumb -->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Home', 'teadokan') ?></a></li>
					<li class="breadcrumb-item active"><?php the_title()?></li>
				</ol>
				<!-- Breadcrumb -->
			</div>
		</div>
	</div>
</section>
<section class="full-width-area">	
	<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
	?>
</section>
<?php
get_footer();
