<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$welcome_image = $atts['welcome_image']; 
if ( empty( $atts['welcome_image'] ) ) {
    return;
}
$url =  esc_url( $welcome_image['url'] );
$image = cleanhit_resize( $url,608, 561, true, true, true );


?>
<!-- Welcome Start -->
<section class="welcome-area">
    <div class="top-shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="welcome-col">
                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>" class="img-fluid" data-aos="zoom-in">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="welcome-col">
                    <div class="welcome-title">
                        <h6><?php echo esc_html($atts['welcome_subtitle']); ?></h6>
                        <h2><?php echo esc_html($atts['welcome_title']); ?></h2>
                    </div>
                    <?php echo wp_kses_post($atts['welcome_content']); ?>
                    <a class="btn btn-primary theme-btn" href="<?php echo $atts['button_url']; ?>" role="button"><?php echo $atts['button']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
