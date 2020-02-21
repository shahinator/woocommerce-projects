<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cleanhit
 */

global $cleanhit_opt;
$url= $cleanhit_opt['cleanhit_blog_bg']['url'];
get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area background-image" data-src="<?php echo esc_attr($url ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="page-heading-box">
                    <h2><?php the_title(); ?></h2>
                    <p><a href="<?php echo esc_url(home_url(' / '));?>"> <?php esc_html_e('Home' , 'cleanhit');?></a> <?php echo esc_html(' / ','cleanhit');?><a href="#"><?php the_title(); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <!-- Service Details Start -->
   <section class="service-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-details-col">
						<?php the_post_thumbnail(); ?>
                        <h4><?php the_title();?></h4>
                        <?php the_content();?>
                        <div class="row">
                            <div class="col-md-6">
								<?php 
									if(function_exists('cleanhit_social_share')){
										cleanhit_social_share();    
									} 
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
endwhile;
	else :
get_template_part( 'template-parts/content', 'none' );
endif;?>

<!-- Service Start -->
<section class="service-area more-service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-service-title">
                    <h4><?php echo esc_html('More services','cleanhit');?></h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
                $team = new WP_Query(array(
                    'post_type' => 'cleanhitservices',
                    'posts_per_page' => 3,
                    
                ));
                while ( $team-> have_posts() ) : $team->the_post();               
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-col">
                    <div class="service-col-img">
                        <?php cleanhit_post_thumbnail('cleanhitservices-thumb', array( 'class' => 'img-responsive' ));?>
                        <div class="my-link-icon">
                            <a href="<?php the_permalink();?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h4><?php the_title();?></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 12, '');?></p>
                    </div>
                </div>
            </div>

              
            <?php 
                endwhile; // End of the loop.
                wp_reset_postdata();?>
        </div>
    </div>
</section>




<?php
get_footer();
