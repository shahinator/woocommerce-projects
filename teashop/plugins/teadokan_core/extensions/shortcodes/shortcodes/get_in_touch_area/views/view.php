<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$get_in_touch_image = $atts['get_in_touch_image']; 
if ( empty( $atts['get_in_touch_image'] ) ) {
    return;
}
$url =  esc_url( $get_in_touch_image['url'] );
$image = teadokan_resize( $url,1920, 670, true, true, true );
?>
<!-- Start Contact Here -->
<section class="section-padding bg-overlay background-image" data-src="<?php echo esc_url($image);?>" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-header text-center">
                    <h2><?php echo esc_html($atts['get_in_touch_title']); ?> <span><?php echo esc_html($atts['get_in_touch_subtitle']); ?></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ul class="contact-info">
                <?php	foreach ($atts['address_list'] as $addresslist):?>
                    <li>
                        <i class="<?php echo esc_attr($addresslist['icon']['icon-class']);?>"></i>
                        <?php echo wp_kses_post($addresslist['features_content']); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="contact-form">
                    <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' );?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ends Contact Here -->
