<?php
if (!defined('FW')) {
    die('Forbidden');
}
global $teadokan_opt;
?>
    <!-- Start the Homes lider here -->
	<section id="home-slider">
		<!-- Start Slider Wraper Here -->
		<div class="slider-waper">
            <?php           
                $slider_post = new WP_Query(array(
                    'post_type' => 'teadokanslider',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],                    
                ));               
                while ( $slider_post-> have_posts() ) : $slider_post->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = teadokan_resize( $url, 1920, 760, true, true, true );
               
            ?>
			<!-- Slider Single Item -->
			<div class="single-slide-item bg-overlay background-image" data-src="<?php echo esc_url($image); ?>">
				<div class="container">
					<div class="teashop-table">
						<div class="teashop-table-cell">
							<div class="row">
								<div class="col-md-6">
									<h1><?php echo get_post_meta( get_the_ID(), 'teadokanslider_slider_subtitle', true );?> <span><?php the_title(); ?></span></h1>
									<?php the_content();?>
									<a href="<?php echo get_post_meta( get_the_ID(), 'teadokanslider_button_url', true );?>" class="teashop-btn"><?php echo get_post_meta( get_the_ID(), 'teadokanslider_button_name', true );?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>            
            <!-- Slider Single Item -->            
            <?php
                endwhile; // End of the loop.
            wp_reset_postdata();?>
		</div>
        <!-- Ends Slider Wraper Here -->
        <?php if($atts['section_style'] == 'title_show'): ?>
        <!-- Start Social Icons Here -->
		<div class="social-icons">
			<div class="container">
                <a href="<?php echo esc_html($atts['facebook']); ?>"><i class="fa fa-facebook"></i> <?php echo esc_html('Facebook','teadokan');?></a>
                <a href="<?php echo esc_html($atts['twitter']); ?>"><i class="fa fa-twitter"></i> <?php echo esc_html('Twitter','teadokan');?></a>                
                <a href="<?php echo esc_html($atts['linkedin']); ?>"><i class="fa fa-linkedin"></i><?php echo esc_html('Linkedin','teadokan');?></a>               
			</div>
		</div>
        <!-- Ends Social Icons Here -->	
        <?php else: ?>
        <?php endif; ?>
	</section>
	<!-- Home Slider ends here -->