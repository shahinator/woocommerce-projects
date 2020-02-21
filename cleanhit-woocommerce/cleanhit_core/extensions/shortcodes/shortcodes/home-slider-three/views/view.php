<?php
if (!defined('FW')) {
    die('Forbidden');
}

$banner_image = $atts['banner_image']; 
if ( empty( $atts['banner_image'] ) ) {
    return;
}
$url =  esc_url( $banner_image['url'] );
$image = cleanhit_resize( $url, 1920, 1080, true, true, true );
?>
<!-- Hero Start -->
<section class="hero-area background-image" id="water-animation" data-src="<?php echo esc_url($image);?>">
    <div class="hero-content">
        <div class="hero-content-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="hero-col">
                            <h1><?php echo esc_html($atts['title']); ?></h1>
                            <h3 class="cd-headline clip">
                                <span class="cd-words-wrapper">
                                    <?php  
                                        $activeClass = 'is-visible';
                                        foreach ($atts['rotated_text_list'] as $list) : 
                                    ?>
                                    <b class="<?php echo esc_attr($activeClass); ?>"><?php echo esc_html($list['name']); ?></b>
                                    <?php 
                                    $activeClass = ' ';
                                    endforeach;?>
                                </span>
                            </h3>
                            <?php echo wp_kses_post($atts['banner_content']); ?>
                            <a class="btn btn-primary theme-btn" href="<?php echo esc_html($atts['banner_button_url']); ?>" role="button"><?php echo esc_html($atts['banner_button_text']); ?></a>
                            <a class="btn btn-primary theme-btn" href="<?php echo esc_html($atts['banner_button_url2']); ?>" role="button"><?php echo esc_html($atts['banner_button_text2']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
