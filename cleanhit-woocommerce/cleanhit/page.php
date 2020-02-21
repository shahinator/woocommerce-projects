<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cleanhit
 */


global $cleanhit_opt;
$url = wp_get_attachment_url( get_post_thumbnail_id() );  
get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area background-image" data-src="<?php echo esc_attr($url ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="page-heading-box">
					<h2><?php the_title(); ?></h2>
					<p><a href="<?php echo esc_url(home_url(' / '));?>"> <?php esc_html_e('Home' , 'cleanhit');?></a> <?php echo esc_html(' / ','cleanhit');?><a href="#"><?php the_title(); ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog-area">
	<div class="container">
		<div class="row">				
			<div class="col-md-12">				
				<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
