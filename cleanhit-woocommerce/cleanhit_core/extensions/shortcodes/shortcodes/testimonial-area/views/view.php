<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$testimonial_image = $atts['testimonial_image']; 
if ( empty( $atts['testimonial_image'] ) ) {
    return;
}
$testimonial_title_image = $atts['testimonial_title_image']; 
$title_url =  esc_url( $testimonial_title_image['url'] );
$title_image = cleanhit_resize( $title_url,553, 552, true, true, true );

$url =  esc_url( $testimonial_image['url'] );
$image = cleanhit_resize( $url,1920, 1080, true, true, true );


?>

<!-- Testimonial Start -->
<section class="testimonial-area background-image" data-src="<?php echo esc_url($image); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <p><?php echo esc_html($atts['testimonial_subtitle']); ?></p>
                    <h2><?php echo esc_html($atts['testimonial_title']); ?></h2>
                    <?php echo wp_kses_post($atts['testimonial_content']); ?>
                    <img src="<?php echo esc_url($title_image); ?>" alt="<?php bloginfo('name');?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-col">
                    <div class="testimonial-carousel">
                        <?php 
                            $features = new WP_Query(array(
                                'post_type' => 'cleanhittestimonials',
                                'posts_per_page' => $atts['posts_per_page'],
                                'order'   => $atts['order'],
                                
                            ));
                            while ( $features-> have_posts() ) : $features->the_post(); 
                            $url = wp_get_attachment_url( get_post_thumbnail_id() );
                            $features_image = cleanhit_resize( $url, 400, 400, true, true, true );
                            $quotation = get_post_meta( get_the_ID(), 'cleanhit_testimonial_quote_icon', true );
                            $quotation_icon = cleanhit_resize( $quotation, 240, 240, true, true, true );

                        ?>
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="testimonial-item-col testimonial-img">
                                        <img src="<?php echo esc_url($features_image);?>" alt="<?php bloginfo('name');?>">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="testimonial-item-col">
                                        <div class="testimonial-item-text">
                                            <?php the_content();?>
                                            <h5><?php the_title(); ?><span><?php echo get_post_meta( get_the_ID(), 'cleanhit_testimonial_designation', true );?></span></h5>
                                            <img src="<?php echo esc_url($quotation_icon);?>" alt="<?php bloginfo('name');?>"  class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                        <?php 
                        endwhile; // End of the loop.
                        wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
