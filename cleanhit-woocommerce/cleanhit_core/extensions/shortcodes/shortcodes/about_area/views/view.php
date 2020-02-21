<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$about_image = $atts['about_image']; 
if ( empty( $atts['about_image'] ) ) {
    return;
}
$url =  esc_url( $about_image['url'] );
$image = cleanhit_resize( $url,600, 580, true, true, true );


?>
<!-- About Start -->
<section class="about-area">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="about-col" data-aos="zoom-in">
                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-col">
                    <h2><?php echo esc_html($atts['about_title']); ?></h2>
                    <?php echo wp_kses_post($atts['about_content']); ?>
                    <h4><?php echo esc_html($atts['choose_title']); ?></h4>
                    <div class="row">
                        <?php	foreach ($atts['choose_list'] as $choose):?>	
                        <div class="col-lg-6">
                            <div class="choose-box">
                                <?php 
                                    $url =  esc_url( $choose['image']['url'] );
                                    $image = cleanhit_resize( $url, 40, 40, true, true, true );
                                ?>
                                <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>"/>
                                <h6><?php echo esc_html($choose['name']); ?></h6>
                                <?php echo wp_kses_post($choose['choose_content']); ?>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
