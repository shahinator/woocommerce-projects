<?php
/**
 * The template for displaying all pages
 * Template Name: Full Width Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cleanhit
 */
get_header();
?>
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
