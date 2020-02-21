<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$new_product_image = $atts['new_product_image']; 
if ( empty( $atts['new_product_image'] ) ) {
    return;
}
$url =  esc_url( $new_product_image['url'] );
$image = teadokan_resize( $url,555, 400, true, true, true );


?>
<!-- Start Health Here -->
<section class="section-padding" id="health">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-header">
                    <h2><?php echo esc_html($atts['new_product_title']); ?></h2>
                    <?php echo wp_kses_post($atts['new_product_content']); ?>
                </div>
                <ul class="health-list">
                <?php	foreach ($atts['features_list'] as $list):?>
                    <li><?php echo esc_html($list['name']); ?></li>
                <?php endforeach;?>

                </ul>
                <a class="read-btn" href="<?php echo esc_html($atts['button_text_url']); ?>"><?php echo esc_html($atts['button_text']); ?><i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="col-md-6">
                <div class="health-bg">
                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ends Health Here -->
