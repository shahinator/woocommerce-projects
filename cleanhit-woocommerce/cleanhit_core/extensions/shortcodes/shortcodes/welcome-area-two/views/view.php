<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$welcome_image = $atts['welcome_image']; 
if ( empty( $atts['welcome_image'] ) ) {
    return;
}
$url =  esc_url( $welcome_image['url'] );
$image = cleanhit_resize( $url,480, 385, true, true, true );


?>
<!-- Welcome Start -->
<section class="welcome-area">
    <div class="welcome-col text-center" data-aos="zoom-in">
        <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
        <h3><?php echo esc_html($atts['welcome_title']); ?></h3>
        <?php echo wp_kses_post($atts['welcome_content']); ?>
        <a class="btn btn-primary theme-btn" href="<?php echo $atts['button_url']; ?>" role="button"><?php echo $atts['button']; ?></a>
    </div>
</section>



