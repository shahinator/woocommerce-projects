<?php
if (!defined('FW')) {
    die('Forbidden');
}

?>
    <!-- Main Slider Start -->
    <section class="main-slider-section">
        <!-- Pogo Silder Start -->
        <div class="pogoSlider" id="pogo-slider">
            <?php           
                $slider_post = new WP_Query(array(
                    'post_type' => 'cleanhitslider',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                $count =1;
                while ( $slider_post-> have_posts() ) : $slider_post->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = cleanhit_resize( $url, 1920, 960, true, true, true );
                if($count ==1){
                    $class="text-center";
                }
                if($count ==2){
                    $class="text-left";
                }
                if($count ==3){
                    $class="text-right";
                }
                ?>
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url(<?php echo esc_url($image); ?>);">
                    <!-- Slider Elements -->

                    <div class="silder-elements <?php echo esc_html($class);?> container">
                        <p class="pogoSlider-slide-element slider-para" data-in="slideDown" data-out="slideDown" data-duration="1000" data-delay="500"><?php echo get_post_meta( get_the_ID(), 'cleanhitslider_slider_subtitle', true );?></p>
                        <h2 class="pogoSlider-slide-element slider-main-title" data-in="slideUp" data-out="slideUp" data-duration="1000" data-delay="500"><?php the_title();?></h2>
                        <div class="pogoSlider-slide-element slider-content" data-in="slideUp" data-out="slideUp" data-duration="1000" data-delay="500"><?php the_content();?> </div>
                        <div class="pogoSlider-slide-element" data-in="expand" data-out="slideUp" data-duration="1000" data-delay="500">
                            <a class="btn btn-primary theme-btn" href="<?php echo get_post_meta( get_the_ID(), 'cleanhitslider_left_button_url', true );?>" role="button"><?php echo get_post_meta( get_the_ID(), 'cleanhitslider_left_button_name', true );?></a>
                            <a class="btn btn-primary theme-btn" href="<?php echo get_post_meta( get_the_ID(), 'cleanhitslider_right_button_url', true );?>" role="button"><?php echo get_post_meta( get_the_ID(), 'cleanhitslider_right_button_name', true );?></a>
                        </div>
                    </div>

                </div>

            <?php 
            $count++;
            endwhile; // End of the loop.
            wp_reset_postdata();?>
        </div>
        <!--Pogo Silder End -->
    </section>