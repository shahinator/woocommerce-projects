<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cleanhit
 */

global $cleanhit_opt;
$url= $cleanhit_opt['cleanhit_blog_bg']['url'];
$error_url= $cleanhit_opt['cleanhit_404_bg']['url'];
get_header();
?>
    <!-- Page Heading Start -->
    <section class="page-heading-area background-image" data-src="<?php echo esc_attr($url ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="page-heading-box">
                        <h2><?php echo esc_html('404 Page','cleanhit');?></h2>
                        <p><a href="<?php echo esc_url(home_url(' / '));?>"> <?php esc_html_e('Home' , 'cleanhit');?></a> <?php echo esc_html(' / ','cleanhit');?><a href="#"><?php echo esc_html('404 Page','cleanhit');?></a></p>
                    </div>
                </div>
            </div>
        </div>
	</section>
    <!-- Error Start -->
    <section class="error-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-col">
						<h1 id="clip" class="background-image" data-src="<?php echo esc_attr($error_url ); ?>"><?php echo esc_html($cleanhit_opt['cleanhit_error_header_text']);?></h1>						
                        <h2><?php echo esc_html($cleanhit_opt['cleanhit_error_subheader']);?></h2>
                        <a class="btn btn-primary theme-btn" href="<?php echo esc_url(home_url(' / '));?>" role="button">Go To Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
