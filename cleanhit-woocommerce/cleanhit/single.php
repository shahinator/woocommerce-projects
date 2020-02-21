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
                        <h2><?php cleanhit_blog_header_details(); ?></h2>
                        <p><a href="<?php echo esc_url(home_url(' / '));?>"> <?php esc_html_e('Home' , 'cleanhit');?></a> <?php echo esc_html(' / ','cleanhit');?><a href="#"><?php cleanhit_blog_header_details(); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
	</section>


    <section class="blog-area">
        <div class="container">
            <div class="row">
				<?php
					$class='';
					if ( is_active_sidebar( 'sidebar-1' ) ) : 				
					$class='col-md-8';
					else:
					$class='col-md-8 margin_auto';
					endif;
				?>
				<div class="<?php echo esc_html($class);?>">
                    <div class="my-blog-col">
                        <div class="row">
							<?php
								if ( have_posts() ) :
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();
										get_template_part( 'template-parts/content', 'single' );
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;
									endwhile;
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif;
							?>							
                        </div>
                    </div>
				</div>				
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
					<?php get_sidebar(); ?>
				<?php } ?> 
            </div>
        </div>
	</section>

<?php
get_footer();
