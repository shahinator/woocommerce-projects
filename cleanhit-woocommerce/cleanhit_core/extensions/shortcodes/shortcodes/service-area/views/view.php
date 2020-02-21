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
<section class="service-area">
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
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = cleanhit_resize( $url, 350, 245, true, true, true );

            ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-col">
                    <div class="service-col-img">
                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                        <div class="my-link-icon">
                            <a href="<?php the_permalink();?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h4><?php the_title();?></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 14, '');?></p>
                    </div>
                </div>
            </div>
            <?php 
            endwhile; // End of the loop.
            wp_reset_postdata();?>
        </div>
    </div>
</section>
