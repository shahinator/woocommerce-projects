<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$about_image = $atts['about_image']; 
if ( empty( $atts['about_image'] ) ) {
    return;
}
$url =  esc_url( $about_image['url'] );
$image = teadokan_resize( $url,930, 670, true, true, true );


?>

<!-- Start About Us Here -->
<section class="section-padding" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-header text-center">
                <h2><?php echo esc_html($atts['about_title']); ?></h2>
                <?php echo wp_kses_post($atts['about_content']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="about-us-video">
                    <div class="video-area bg-overlay background-image" data-src="<?php echo esc_url($image);?>">
                        <a class="video-play-btn mfp-iframe" href="<?php echo esc_html($atts['about_video_url']); ?>">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php	foreach ($atts['features_list'] as $featureslist):?>
            <div class="col-sm-4">
                <div class="about-list-box about-list">
                    <h3><i class="fa fa-check"></i><?php echo esc_html($featureslist['name']); ?></h3>
                    <?php echo wp_kses_post($featureslist['features_content']); ?>
                </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</section>
<!-- Ends About Us Here -->
