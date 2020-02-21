<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$counter_bg_image = $atts['counter_bg_image']; 
if ( empty( $atts['counter_bg_image'] ) ) {
    return;
}
$url =  esc_url( $counter_bg_image['url'] );
$image = cleanhit_resize( $url,1920, 1080, true, true, true );
?>
<!-- Counter Start -->
<section class="counter-area over-layer-blue background-image" data-src="<?php echo esc_url($image);?>">
    <div class="container">
        <div class="row">
            <?php  foreach ($atts['counter_items'] as $counter) : ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-col">
                    <div class="counter">
                        <div class="count"><?php echo esc_html($counter['counterup_number']); ?></div>
                    </div>
                    <p><?php echo esc_html($counter['counterup_title']);?></p>
                    <span class="<?php echo esc_attr($counter['icon']['icon-class']);?>"></span>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>

