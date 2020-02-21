<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$contact_image = $atts['contact_image']; 
if ( empty( $atts['contact_image'] ) ) {
    return;
}
$url =  esc_url( $contact_image['url'] );
$image = teadokan_resize( $url,450, 450, true, true, true );
?>
<!-- contact section start here -->
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-image">
                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                </div>
            </div>
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
        </div>
    </div>
</div><!-- contact section end here -->
