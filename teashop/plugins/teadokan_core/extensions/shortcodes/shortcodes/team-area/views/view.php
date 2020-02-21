<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<!-- Start Team Here -->


<?php if($atts['team_style'] == 'team_one'): ?>


<section class="section-padding">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-header text-center">
                <h2><?php echo esc_html($atts['team_title']); ?> <span><?php echo esc_html($atts['team_subtitle']); ?></span></h2>
                </div>
            </div>
        </div>            
        <?php else: ?>
        <?php endif; ?>
        <div class="team-slides">
            <?php 
                $features = new WP_Query(array(
                    'post_type' => 'teadokanteams',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                while ( $features-> have_posts() ) : $features->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = teadokan_resize( $url, 350, 400, true, true, true );

            ?>
            <div class="single-team-item">
                <div class="single-team-box">
                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                    <h4 class="team-overlay"><?php the_title();?> <span><?php echo get_post_meta( get_the_ID(), 'teadokan_team_designation', true );?></span></h4>
                </div>
            </div>
            <?php 
            endwhile; // End of the loop.
            wp_reset_postdata();?> 
        </div>
    </div>
</section>
        
<?php else: ?>


<section class="section-padding">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-header text-center">
                <h2><?php echo esc_html($atts['team_title']); ?> <span><?php echo esc_html($atts['team_subtitle']); ?></span></h2>
                </div>
            </div>
        </div>            
        <?php else: ?>
        <?php endif; ?>
            <div class="row team-style-two">
                <?php 
                    $features = new WP_Query(array(
                        'post_type' => 'teadokanteams',
                        'posts_per_page' => $atts['posts_per_page'],
                        'order'   => $atts['order'],
                        
                    ));
                    while ( $features-> have_posts() ) : $features->the_post(); 
                    $url = wp_get_attachment_url( get_post_thumbnail_id() );
                    $image = teadokan_resize( $url, 350, 400, true, true, true );

                ?>
                <div class="col-md-4">
                    <div class="single-team-item">
                        <div class="single-team-box">
                            <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                            <h4 class="team-overlay"><?php the_title();?> <span><?php echo get_post_meta( get_the_ID(), 'teadokan_team_designation', true );?></span></h4>
                        </div>
                    </div>
                </div>
                <?php 
                endwhile; // End of the loop.
                wp_reset_postdata();?> 
            </div>
        </div>
</section>
<?php endif; ?>
<!-- Ends Team Here -->
