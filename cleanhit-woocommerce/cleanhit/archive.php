<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                        <h2><?php the_archive_title(); ?></h2>
                        <p><a href="<?php echo esc_url(home_url(' / '));?>"> <?php esc_html_e('Home' , 'cleanhit');?></a> <?php echo esc_html(' / ','cleanhit');?><a href="#"><?php the_archive_title(); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
	</section>	
    <!-- Blog With Sidebar Start -->
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
										get_template_part( 'template-parts/content', get_post_type() );
									endwhile;
									the_posts_pagination();
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
