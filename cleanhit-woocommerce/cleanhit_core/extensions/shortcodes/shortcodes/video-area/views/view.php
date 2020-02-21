<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$video_image = $atts['video_image']; 
if ( empty( $atts['video_image'] ) ) {
    return;
}
$url =  esc_url( $video_image['url'] );
$image = cleanhit_resize( $url,80, 80, true, true, true );
?>
<!-- Video Start -->
<section class="video-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="video-col">
                    <h2><?php echo esc_html($atts['video_title']); ?></h2>
                    <p><?php echo esc_html($atts['video_subtitle']); ?></p>
                    <a href="<?php echo esc_html($atts['button_url']); ?>" class="html5lightbox" title="<?php bloginfo('name');?>">
                        <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>