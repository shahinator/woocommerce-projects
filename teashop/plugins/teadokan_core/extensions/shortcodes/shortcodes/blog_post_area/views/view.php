<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$blog_title_image = $atts['blog_title_image']; 
if ( empty( $atts['blog_title_image'] ) ) {
    return;
}

$url =  esc_url( $blog_title_image['url'] );
$image = teadokan_resize( $url,545, 1200, true, true, true );


?>

<!-- Start Blog Here -->
<section class="section-padding background-image" data-src="<?php echo esc_url($image);?>" id="blog">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- Start Section Header Here -->
                <div class="section-header text-center">
                    <h2><?php echo esc_html($atts['blog_title']); ?> <span><?php echo esc_html($atts['blog_subtitle']); ?></span></h2>
                    <?php echo wp_kses_post($atts['blog_content']); ?>
                </div>
                <!-- Ends Section Header Here -->
            </div>
        </div>
        <?php else: ?>
        <?php endif; ?>

        <!-- Start Blog Content Row -->
            <?php 
                $features = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                $count =1;
                while ( $features-> have_posts() ) : $features->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $features_image = teadokan_resize( $url, 555, 290, true, true, true );

                if($count ==2){
                    $class_left="col-sm-push-6";
                    $class_right="col-sm-pull-6";
                }

            ?>
            <div class="row blog-content-wrap">
                <div class="col-sm-6 <?php echo esc_attr($class_left);?>">
                    <div class="blog-bg blog-bg-1 background-image" data-src="<?php echo esc_url($features_image);?>"></div>
                </div>
                <div class="col-sm-6 <?php echo esc_attr($class_right);?>">
                    <div class="blog-content-box">
                        <h3><?php the_title();?> <span><?php teadokan_posted_on();?></span></h3>
                        <p><?php echo wp_trim_words( get_the_content(), 30, '');?></p>
                        <a class="read-btn" href="<?php the_permalink();?>"><?php echo esc_html('Read More','teadokan');?> <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php 
            $count++;
            endwhile; // End of the loop.
            wp_reset_postdata();?>
        <!-- Ends Blog Content Row -->
    </div>
</section>
<!-- Ends Blog Here -->