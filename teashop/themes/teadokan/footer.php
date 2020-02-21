<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TeaDokan
 */
global $teadokan_opt;
$url= $teadokan_opt['teadokan_footer_background']['url'];
?>

	</div><!-- #content -->
	<?php if (!empty($teadokan_opt['teadokan_scrolltotop']) && $teadokan_opt['teadokan_scrolltotop'] == 1) { ?>
	<!-- Start The ScrollToTop Here -->
	<div class="ScrollToTop">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	<!-- ScrollToTop Ends Here -->
	<?php } ?> 
	<!-- Start Footer Here -->
	<footer class="section-padding bg-overlay background-image" id="footer" data-src="<?php echo esc_attr($url ); ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-top text-center">
						<h1 class="brand-logo">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img src="<?php echo esc_url(teadokan_logo_url(TEADOKAN_IMAGES . '/logo.png'));?>" alt="<?php bloginfo('name') ?>">
							</a> 
						</h1>							
						<?php if (!empty($teadokan_opt['teadokan_footer_social_enable']) && $teadokan_opt['teadokan_footer_social_enable'] == 1) { ?>
						<!-- Social Icons -->
						<div class="social-icons">
							<?php if (!empty($teadokan_opt['teadokan_footer_facebook']) && !empty($teadokan_opt['teadokan_footer_facebook'])) { ?>
								<a href="<?php echo esc_url($teadokan_opt['teadokan_footer_facebook']); ?>"><i class="fa fa-facebook"></i> Facebook <?php echo esc_html('','')?></a>
							<?php } ?>							
							<?php if (!empty($teadokan_opt['teadokan_footer_twitter']) && !empty($teadokan_opt['teadokan_footer_twitter'])) { ?>
							<a href="<?php echo esc_url($teadokan_opt['teadokan_footer_twitter']); ?>"><i class="fa fa-twitter"></i> Twitter <?php echo esc_html('','')?></a>
							<?php } ?>
							<?php if (!empty($teadokan_opt['teadokan_footer_google_plus']) && !empty($teadokan_opt['teadokan_footer_google_plus'])) { ?>
							<a href="<?php echo esc_url($teadokan_opt['teadokan_footer_google_plus']); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i> Google Plus </a>
							<?php } ?>
							<?php if (!empty($teadokan_opt['teadokan_footer_instagram']) && !empty($teadokan_opt['teadokan_footer_instagram'])) { ?>
							<a href="<?php echo esc_url($teadokan_opt['teadokan_footer_instagram']); ?>"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram </a>
							<?php } ?>
						</div>
						<!-- Social Icons -->						
						<?php } ?> 
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright text-center">
						<?php if( get_theme_mod( 'copyright_text_content') != "" ){ ?>
							<p><?php echo get_theme_mod( 'copyright_text_content'); ?></p>
						<?php }else {?>
							<p><?php echo esc_html('© 2019 .All Right Reserved By Radon Theme','teadokan'); ?></p>
						<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Ends Footer Here -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
