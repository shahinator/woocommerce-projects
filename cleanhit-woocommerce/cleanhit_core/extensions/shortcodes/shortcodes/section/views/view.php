<?php
if (!defined('FW')) {
    die('Forbidden');
}
$bg_color = $bg_image = $section_extra_classes = $height_classes = $overlay = $space = $data_height = $extra_height = $height = $overlay_fast = $overlay_last = '';
$id = uniqid('section-');


$space = $atts['default_spacing'];

$bg_options = $atts['background_options']['background'];
if ($bg_options == 'color') {
    $bg_color = 'background-color:' . $atts['background_options']['color']['background_color'] . ';';
}


if ($bg_options == 'image') {
    $bg_image = 'background:url(' . esc_url($atts['background_options']['image']['background_image']['data']['icon']) . ') no-repeat center top fixed;-moz-background-size: cover;background-size: cover;-webkit-background-size: cover;-o-background-size: cover;width: 100%;overflow: hidden;';
    $section_extra_classes = 'parallax-section';


    $overlay_option = $atts['background_options']['image']['overlay_options']['overlay'];
    if ($overlay_option === 'yes' && function_exists('cleanhit_hex2rgba')) {
        $overlays = $atts['background_options']['image']['overlay_options']['yes']['background'];
        $overlay = "background-color: ". cleanhit_hex2rgba($overlays, 0.8) . "; ";
    }
}


if ($atts['height'] != 'auto' && $atts['height'] != 'fw-section-height-sm' && $atts['height'] != 'fw-section-height-md' && $atts['height'] != 'fw-section-height-lg') {

    $height = (int) $atts['height'];
    $extra_height = 'height: ' . $height . 'px; ';
} else {
    $height_classes = ' ' . $atts['height'];
}

$container_class = ( isset($atts['is_fullwidth']) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';

$custom_class = $atts['class'];


global $cleanhit_intro;
if ($cleanhit_intro == 'y') {
    $section_extra_classes .= ' onepage-home intro-full-screen';
}
?>


<div id="<?php echo esc_attr($id); ?>" class="fw-main-row <?php echo esc_attr($space); ?> <?php echo esc_attr($section_extra_classes); ?> <?php echo esc_attr($height_classes); ?> <?php echo esc_attr($custom_class); ?>"  style="<?php echo esc_attr($bg_color); ?> <?php echo esc_attr($overlay); ?> <?php echo esc_attr($extra_height); ?> position:relative" >

    <div style="<?php echo $bg_image; ?>  z-index:-1;position:absolute; width:100%;height:100%;left: 0;top: 0;" ></div>
    <div class="<?php echo esc_attr($container_class); ?>">
        <?php echo do_shortcode($content); ?>
        <?php if ($cleanhit_intro == 'y'): ?>
            <a class="scroll-down scroll-next-btn" href="#next"><i class="fa fa-angle-down"></i></a>  
            <?php endif; ?>

    </div>
</div>
