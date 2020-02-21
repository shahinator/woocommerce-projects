<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TeaDokan
 */

?>
<!-- Start Signle Blog Box -->
<div id="post-<?php the_ID(); ?>" <?php post_class("signle-blog-box"); ?>>
	<div class="blog-content-box">		
		<?php the_content();?>
	</div>
</div>
<!-- Ends Signle Blog Box -->