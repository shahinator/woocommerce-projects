<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cleanhit
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class("inner-page-content"); ?>>		
	<?php the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cleanhit' ),
			'after'  => '</div>',
		) );
	?>
</div>
<!-- Ends Signle Blog Box -->
