<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$partner_logo_image = $atts['partner_logo_image']; 
if ( empty( $atts['partner_logo_image'] ) ) {
    return;
}
$url =  esc_url( $partner_logo_image['url'] );
$image = cleanhit_resize( $url,150, 150, true, true, true );


?>

    <!-- Top Clients -->
    <section class="top-client-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <p><?php echo esc_html($atts['partner_logo_subtitle']); ?></p>
                        <h2><?php echo esc_html($atts['partner_logo_title']); ?></h2>
                        <?php echo wp_kses_post($atts['partner_logo_content']); ?>
                        <img src="<?php echo esc_url($image); ?>" alt="<?php bloginfo('name');?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $logo = new WP_Query(array(
                        'post_type' => 'cleanhitlogo',
                        'posts_per_page' => $atts['posts_per_page'],
                        'order'   => $atts['order'],
                        
                    ));
                    while ( $logo-> have_posts() ) : $logo->the_post(); 
                    $url = wp_get_attachment_url( get_post_thumbnail_id() );
                    $logoimage = cleanhit_resize( $url, 160, 125, true, true, true );

                ?>

                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="client-col">
                        <a href="#"> <img src="<?php echo esc_url($logoimage);?>" alt="<?php bloginfo('name');?>"></a>
                    </div>
                </div>

                <?php 
                endwhile; // End of the loop.
                wp_reset_postdata();?>

            </div>
        </div>
    </section>