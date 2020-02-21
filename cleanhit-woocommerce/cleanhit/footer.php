<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cleanhit
 */
global $cleanhit_opt;
$url= $cleanhit_opt['cleanhit_footer_background']['url'];
?>

	</div><!-- #content -->
	<?php if (!empty($cleanhit_opt['cleanhit_toparea_enable']) && $cleanhit_opt['cleanhit_toparea_enable'] == 1) { ?>
    <section class="call-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="call-col">
                        <h2><?php echo esc_html('How can we help you?','cleanhit');?></h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="call-col">
                        <h3><i class="icon icon-Headset"></i> <?php echo esc_html($cleanhit_opt['cleanhit_header_middle_phone']); ?></h3>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<?php } ?>
	<!-- Footer Start -->
	
	<?php if (!empty($cleanhit_opt['cleanhit_middle_enable']) && $cleanhit_opt['cleanhit_middle_enable'] == 1) { ?>
    <footer class="footer-area over-layer-blue background-image" data-src="<?php echo esc_attr($url ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-col">
                        <h4><?php echo esc_html('information','cleanhit');?></h4>
                        <p><?php echo esc_html('Don\'t hesitate to contact us. We are very helpful','cleanhit');?></p>
                        <ul>
                            <li><i class="icon icon-Pointer"></i><?php echo esc_html($cleanhit_opt['cleanhit_header_middle_phone']); ?></li>
                            <li><i class="icon icon-Mail"></i> <?php echo esc_html($cleanhit_opt['cleanhit_header_middle_email']); ?></li>
                            <li><i class="icon icon-Headset"></i> <?php echo esc_html('Call Us:','cleanhit');?> <?php echo esc_html($cleanhit_opt['cleanhit_header_middle_location']); ?></li>
                        </ul>
                        <?php if (!empty($cleanhit_opt['cleanhit_social_enable']) && $cleanhit_opt['cleanhit_social_enable'] == 1) { ?>
                            <div class="my-social">
                                <ul>
                                    <?php if (!empty($cleanhit_opt['cleanhit_facebook']) && !empty($cleanhit_opt['cleanhit_facebook'])) { ?>
                                        <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_facebook']); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                    <?php if (!empty($cleanhit_opt['cleanhit_twitter']) && !empty($cleanhit_opt['cleanhit_twitter'])) { ?>
                                        <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_twitter']); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                    <?php if (!empty($cleanhit_opt['cleanhit_linkedin']) && !empty($cleanhit_opt['cleanhit_linkedin'])) { ?>
                                        <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_linkedin']); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                    <?php if (!empty($cleanhit_opt['cleanhit_google_plus']) && !empty($cleanhit_opt['cleanhit_google_plus'])) { ?>
                                        <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_google_plus']); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                    <?php if (!empty($cleanhit_opt['cleanhit_instagram']) && !empty($cleanhit_opt['cleanhit_instagram'])) { ?>
                                        <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_instagram']); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-6">
                <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
					<?php dynamic_sidebar('sidebar-2'); ?>
				<?php } ?>
                </div>
            </div>
        </div>
        <div class="footer-img" data-aos="fade-up">
            <img src="<?php echo CLEANHIT_IMAGES; ?>/footer.png" alt="<?php bloginfo( 'name' ); ?>" class="img-fluid">
        </div>            
    </footer>
    <?php } ?>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright"> 
                        <?php if (!empty($cleanhit_opt['cleanhit_copyright']) && !empty($cleanhit_opt['cleanhit_copyright'])) { ?>
                            <p>
                                <?php echo wp_kses_post($cleanhit_opt['cleanhit_copyright']);?>
                            </p>
                        <?php }else {?>
                            <p><?php echo esc_html('Copyright By IRStheme. All Rights Reserved.','cleanhit'); ?></p>
                        <?php } ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>  

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
