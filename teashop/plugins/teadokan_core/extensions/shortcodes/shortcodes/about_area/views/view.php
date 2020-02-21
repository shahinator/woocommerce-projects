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

<section class="section-padding" id="about">
    <!-- Start Video Button Here -->
    <div class="video-area bg-overlay background-image" data-src="<?php echo esc_url($image);?>">
        <a class="video-play-btn mfp-iframe" href="<?php echo esc_html($atts['about_video_url']); ?>">
            <i class="fa fa-play"></i>
        </a>
    </div>
    <!-- Ends Video Button Here -->

    <!-- Start About Content Here -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <div class="section-header">
                    <h2><?php echo esc_html($atts['about_title']); ?></h2>
                    <?php echo wp_kses_post($atts['about_content']); ?>
                </div>
                <ul class="about-list">
                <?php	foreach ($atts['features_list'] as $featureslist):?>
                    <li>
                        <h3><i class="fa fa-check"></i><?php echo esc_html($featureslist['name']); ?></h3>
                        <?php echo wp_kses_post($featureslist['features_content']); ?>
                    </li>
                <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Ends About Content Here -->
</section>
