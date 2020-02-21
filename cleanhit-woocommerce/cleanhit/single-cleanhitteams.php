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
<!-- Team Details Start -->
<section class="team-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="team-details-col">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-details-col">
                    <div class="team-details-text">
                        <h3><?php the_title();?></h3>
                        <span><?php echo esc_html(get_post_meta( get_the_ID(), 'cleanhit_team_designation', true ));?></span>
                        <div class="my-reatings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="my-info">
                            <ul>
                                <li><i class="fa fa-envelope-o"></i> <?php echo esc_html(get_post_meta( get_the_ID(), 'cleanhit_team_mail', true ));?></li>
                                <li><i class="fa fa-phone"></i> <?php echo esc_html(get_post_meta( get_the_ID(), 'cleanhit_team_phone', true ));?></li>
                                <li><i class="fa fa-external-link"></i> <a href="#" target="_blank"> <?php echo esc_html(get_post_meta( get_the_ID(), 'cleanhit_team_website', true ));?></a></li>
                            </ul>
                        </div>
                        <div class="details-social">
                            <ul>                                
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_facebook', true ));?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_twitter', true ));?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_drible', true ));?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_google_plus', true ));?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_linkedin', true ));?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4><?php echo esc_html('Few word about','cleanhit');?> <span><?php the_title();?></span></h4>
                    <?php the_content(); ?>                 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Start -->
<?php 
endwhile;
	else :
get_template_part( 'template-parts/content', 'none' );
endif;?>
<section class="team-area team-area-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <p><?php  echo esc_html('Our Team','cleanhit');?></p>
                    <h2><?php  echo esc_html('Our other experts','cleanhit');?></h2>
                    <span><?php  echo esc_html('we clean your house and office','cleanhit');?></span>
                    <img src="<?php echo CLEANHIT_IMAGES; ?>/icon/project-title-icon.png" alt="<?php bloginfo('name');?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-slider">
                <?php 
                    $team = new WP_Query(array(
                        'post_type' => 'cleanhitteams',
                        'posts_per_page' => -1,
                        
                    ));
                    while ( $team-> have_posts() ) : $team->the_post(); 
                ?>
                <div class="team-col">
                    <div class="our-team">
                        <?php cleanhit_post_thumbnail('cleanhitteams-thumb', array( 'class' => 'img-responsive' ));?>
                        <ul class="social team-details">
                            <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_facebook', true ));?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_twitter', true ));?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_drible', true ));?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_google_plus', true ));?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'cleanhit_team_linkedin', true ));?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                        <a href="#"><i class="fa fa-plus"></i></a>
                    </div>
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <p><?php echo esc_html(get_post_meta( get_the_ID(), 'cleanhit_team_designation', true ));?></p>
                </div>     
                    <?php 
                        endwhile; // End of the loop.
                        wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
