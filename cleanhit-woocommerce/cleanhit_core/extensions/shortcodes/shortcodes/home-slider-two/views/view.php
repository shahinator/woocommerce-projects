<?php
if (!defined('FW')) {
    die('Forbidden');
}

?>

<!-- Slider Start -->
<section class="my-main-slider-area">
    <ul class="main-slider slide">

        <?php           
            $slider_post = new WP_Query(array(
                'post_type' => 'cleanhitslider',
                'posts_per_page' => $atts['posts_per_page'],
                'order'   => $atts['order'],                
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cleanhitSlider_cat',
                        'terms' => 'slider-two',
                        'field' => 'slug',
                        'include_children' => true,
                        'operator' => 'IN'
                    )
                ),
                
            ));
            while ( $slider_post-> have_posts() ) : $slider_post->the_post(); 
            $url = wp_get_attachment_url( get_post_thumbnail_id() );
            $image = cleanhit_resize( $url, 1920, 960, true, true, true );
        ?>
        <li class="slide__item background-image" data-src="<?php echo esc_url($image); ?>">
            <div class="slide-caption">
                <h2 class="slide-caption__title"><?php the_title();?></h2>
                <div class="slide-caption__desc"><?php the_content();?> </div>
                <a class="btn btn-primary theme-btn" href="<?php echo get_post_meta( get_the_ID(), 'cleanhitslider_left_button_url', true );?>" role="button"><?php echo get_post_meta( get_the_ID(), 'cleanhitslider_left_button_name', true );?></a>
                <a class="btn btn-primary theme-btn" href="<?php echo get_post_meta( get_the_ID(), 'cleanhitslider_right_button_url', true );?>" role="button"><?php echo get_post_meta( get_the_ID(), 'cleanhitslider_right_button_name', true );?></a>
            </div>
        </li>
                <?php 
            endwhile; // End of the loop.
            wp_reset_postdata();?>
    </ul>
</section>
