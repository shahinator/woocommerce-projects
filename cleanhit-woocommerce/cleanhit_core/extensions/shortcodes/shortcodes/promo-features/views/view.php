<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<!-- Features Start -->
<section class="features-area">
    <div class="container">
        <div class="row justify-content-center">
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
                    <div class="features-col">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title();?>">
                        <h4><?php the_title();?></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 13, '');?></p>
                    </div>
                </div>

                <?php 
                endwhile; // End of the loop.
                wp_reset_postdata();?>
        </div>
    </div>
</section>
