<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<!-- Start Product Here -->
<section class="section-padding" id="product">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- Start Section Header Here -->
                    <div class="section-header text-center">
                        <h2><?php echo esc_html($atts['services_title']); ?> <span><?php echo esc_html($atts['services_subtitle']); ?></span></h2>
                        <?php echo wp_kses_post($atts['services_content']); ?>
                    </div>
                    <!-- Ends Section Header Here -->
                </div>
            </div>
        <?php else: ?>
        <?php endif; ?>
        <div class="row">

            <?php 
                $features = new WP_Query(array(
                    'post_type' => 'teadokanservices',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                while ( $features-> have_posts() ) : $features->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = teadokan_resize( $url, 250, 185, true, true, true );

            ?>
            <!-- Start Single Product Box Here -->
            <div class="col-md-3 col-sm-6">
                <div class="single-product-box">
                    <h4><?php the_title(); ?></h4>
                    <div class="product-photo">
                        <div class="teashop-table">
                            <div class="teashop-table-cell">
                                <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                            </div>
                        </div>
                    </div>
                    <p><?php echo wp_trim_words( get_the_content(), 15, '');?></p>
                    <a class="teashop-btn" href="<?php the_permalink();?>"><?php echo esc_html('View More','teadokan');?></a>
                </div>
            </div>
            <!-- Ends Single Product Box Here -->
            
            <?php 
            endwhile; // End of the loop.
            wp_reset_postdata();?>

        </div>
    </div>
</section>
<!-- Ends Product Here -->
