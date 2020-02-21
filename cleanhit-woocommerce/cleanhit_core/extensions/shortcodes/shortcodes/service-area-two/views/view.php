<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$services_image = $atts['services_image']; 
if ( empty( $atts['services_image'] ) ) {
    return;
}
$url =  esc_url( $services_image['url'] );
$image = cleanhit_resize( $url,132, 120, true, true, true );


?>
<!-- Service Start -->
<section class="service-area service-area-two">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <p><?php echo esc_html($atts['services_subtitle']); ?></p>
                        <h2><?php echo esc_html($atts['services_title']); ?></h2>
                        <?php echo wp_kses_post($atts['services_content']); ?>
                        <img src="<?php echo esc_url($image); ?>" alt="<?php bloginfo('name');?>">
                    </div>
                </div>
            </div>
        <?php else: ?>
        <?php endif; ?>
        <div class="row">
            <?php 
                $features = new WP_Query(array(
                    'post_type' => 'cleanhitservices',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                while ( $features-> have_posts() ) : $features->the_post(); 
                $url = get_post_meta(get_the_ID(),'cleanhitproject_services_icon',true);
                $image = cleanhit_resize( $url, 80, 80, true, true, true );

            ?>

            <div class="col-lg-4 col-md-6">
                <div class="service-col service-col-two">
                    <div class="my-service-icon">
                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                    </div>
                    <div class="service-content">
                        <h4><?php the_title();?></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 12, '');?></p>
                    </div>
                </div>
            </div>
        <?php 
        endwhile; // End of the loop.
        wp_reset_postdata();?>

        </div>
    </div>
</section>
