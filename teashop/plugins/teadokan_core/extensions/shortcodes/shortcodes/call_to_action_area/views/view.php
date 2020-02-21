<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$call_to_action_image = $atts['call_to_action_image']; 
if ( empty( $atts['call_to_action_image'] ) ) {
    return;
}
$url =  esc_url( $call_to_action_image['url'] );
$image = teadokan_resize( $url,1920, 400, true, true, true );


?>
<!-- Start Discount Here -->
<section class="section-padding bg-overlay background-image" data-src="<?php echo esc_url($image);?>" id="discount">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-header">
                    <h2><?php echo esc_html($atts['call_to_action_title']); ?> <br> <span><?php echo esc_html($atts['call_to_action_subtitle']); ?></span> </h2>
                </div>
            </div>
            <div class="col-md-5">
                <div class="discount-form">
                    <?php echo do_shortcode( '[mc4wp_form id="163"]' );?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ends Discount Here -->
