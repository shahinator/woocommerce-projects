<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$testimonial_image = $atts['testimonial_image']; 
if ( empty( $atts['testimonial_image'] ) ) {
    return;
}
$url =  esc_url( $testimonial_image['url'] );
$image = teadokan_resize( $url,555, 415, true, true, true );


?>

<!-- Start Testimonial Here -->
<section class="section-padding" id="testimonial">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-header text-center">
                    <h2><?php echo esc_html($atts['testimonial_title']); ?> <span><?php echo esc_html($atts['testimonial_subtitle']); ?></span></h2>
                </div>
            </div>
        </div>
        <?php else: ?>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="testimonial-slides">

                <?php 
                $features = new WP_Query(array(
                    'post_type' => 'teadokantestimonials',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                while ( $features-> have_posts() ) : $features->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $testimonialimage = teadokan_resize( $url, 140, 140, true, true, true );

                ?>
                <!-- Testimonial Single Item -->
                <div class="testimonial-single-item">
                    <div class="clint">
                        <img src="<?php echo esc_url($testimonialimage);?>" alt="<?php bloginfo('name');?>">
                        <div class="clint-name">
                            <h4><?php the_title();?> <span><?php echo get_post_meta( get_the_ID(), 'teadokan_testimonial_designation', true );?></span></h4>
                            <div class="clint-ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="clint-reviews">
                    <?php the_content();?>
                    </div>
                </div>
                <!-- Testimonial Single Item -->

                <?php 
                endwhile; // End of the loop.
                wp_reset_postdata();?>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="testimonial-photo">
                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Testimonial Here -->