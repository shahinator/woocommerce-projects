<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$blog_title_image = $atts['blog_title_image']; 
if ( empty( $atts['blog_title_image'] ) ) {
    return;
}

$url =  esc_url( $blog_title_image['url'] );
$image = cleanhit_resize( $url,520, 520, true, true, true );


?>
<!-- Blog Start -->
<section class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <p><?php echo esc_html($atts['blog_subtitle']); ?></p>
                    <h2><?php echo esc_html($atts['blog_title']); ?></h2>
                    <?php echo wp_kses_post($atts['blog_content']); ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php bloginfo('name');?>">
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                $features = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                while ( $features-> have_posts() ) : $features->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $features_image = cleanhit_resize( $url, 800, 440, true, true, true );

            ?>
            <div class="col-md-6">
                <div class="blog-col">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="blog-img">
                            <img src="<?php echo esc_url($features_image);?>" alt="<?php bloginfo('name');?>">
                            <div class="read-more-icon">
                                <a href="<?php the_permalink();?>">
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                            <ul>
                                <li><i class="fa fa-calendar"></i> <?php cleanhit_posted_on();?></li>
                                <li><i class="fa fa-comments-o"></i> <?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'No Comment');?></li>
                            </ul>
                        </div>
                    <?php endif;?>
                    <div class="blog-text">
                        <div class="blog-meta">
                            <span><a href="#"><i class="fa fa-user"></i> <?php the_author();?></a></span>
                            <span><i class="fa fa-folder"></i> <?php the_category( ', ' ); ?> </span>
                            <span>	
                            <?php 
                                $tag=get_the_tags( get_the_ID() );
                                if(!empty($tag)){
                                    echo '<i class="fa fa-tag" aria-hidden="true"></i>'. get_the_tag_list('',' , ');
                                }
                                ?>
                            </span>
                        </div>
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 10, '');?></p>
                    </div>
                </div>
            </div> 

            <?php 
            endwhile; // End of the loop.
            wp_reset_postdata();?>
        </div>
    </div>
</section>