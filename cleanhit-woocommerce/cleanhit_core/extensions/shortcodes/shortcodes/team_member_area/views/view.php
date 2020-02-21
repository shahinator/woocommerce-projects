<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$team_image = $atts['team_image']; 
if ( empty( $atts['team_image'] ) ) {
    return;
}
$url =  esc_url( $team_image['url'] );
$image = cleanhit_resize( $url,132, 120, true, true, true );


?>

    <!-- Team Start -->
    <section class="team-area">
        <div class="container">
            <?php if($atts['section_style'] == 'title_show'): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <p><?php echo esc_html($atts['team_subtitle']); ?></p>
                        <h2><?php echo esc_html($atts['team_title']); ?></h2>
                        <?php echo wp_kses_post($atts['team_content']); ?>
                        <img src="<?php echo esc_url($image); ?>" alt="<?php bloginfo('name');?>">
                    </div>
                </div>
            </div>
            <?php else: ?>
            <?php endif; ?>
            <div class="row">
            <?php 
                $features = new WP_Query(array(
                    'post_type' => 'cleanhitteams',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                while ( $features-> have_posts() ) : $features->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = cleanhit_resize( $url, 350, 455, true, true, true );
                $designation = get_post_meta( get_the_ID(), 'cleanhit_team_designation', true );
            ?>

                <div class="col-lg-4 col-sm-6">
                    <div class="team-col">
                        <div class="our-team">
                            <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                            <ul class="social">
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_facebook', true ));?>" class="fa fa-facebook"></a></li>
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_twitter', true ));?>" class="fa fa-twitter"></a></li>
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_google_plus', true ));?>" class="fa fa-google-plus"></a></li>
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_linkedin', true ));?>" class="fa fa-linkedin"></a></li>
                            </ul>
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <p><?php echo esc_html($designation);?></p>
                    </div>
                </div>


            <?php 
            endwhile; // End of the loop.
            wp_reset_postdata();?>
            </div>
        </div>
    </section>
