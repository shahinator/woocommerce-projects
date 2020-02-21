<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
global $post;
$teadokan_paged = get_query_var('paged') ? get_query_var('paged') : 1;
query_posts( array( 
	'post_type' => 'product', 
	'paged' => $teadokan_paged,	
	'posts_per_page' => $atts['posts_per_page'],
	'order'   => $atts['order'],
	) );
?>
	<!-- Start Featurs Area -->
	<section class="section-padding" id="featurs">
		<div class="container">
		<?php if($atts['section_style'] == 'title_show'): ?>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!-- Start Section Header Here -->
					<div class="section-header text-center">
						<h2><?php echo esc_html($atts['featured_product_title']); ?> <span><?php echo esc_html($atts['featured_product_subtitle']); ?></span></h2>
						<?php echo wp_kses_post($atts['featured_product_content']); ?>
					</div>
					<!-- Ends Section Header Here -->
				</div>
			</div>
            <?php else: ?>
            <?php endif; ?>
			<div class="row">
				<div class="col-md-12">
					<!-- Portfolio Navigation Start Here -->
					<ul class="featurs-navigation">
						<li class="active" data-filter="*"><?php esc_html_e('All','teadokan') ?></li>


						<?php $teadokan_terms = get_terms( 'product_cat' );
							if ( ! empty( $teadokan_terms ) && ! is_wp_error( $teadokan_terms ) ){
								foreach ( $teadokan_terms as $term ) {
								echo '<li class="" data-filter=".' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</li>';
							}	
							} 
						?>
					</ul>
					<!-- Portfolio Navigation Ends Here -->

					<!-- Portfolio List Start Here -->
					<div class="row portfolio-list">

					<?php while ( have_posts() ) : the_post(); ?>
                    <?php
                    $teadokan_terms = get_the_terms( $post->ID, 'product_cat' );	
                    if ( $teadokan_terms && ! is_wp_error( $teadokan_terms ) ) : 
                        $teadokan_links = array();
                        foreach ( $teadokan_terms as $term ) {
                            $teadokan_links[] = $term->slug;
                        }	
                        $teadokan_jlink = join( " ", $teadokan_links );
                        $type = get_post_meta(get_the_ID(),'_teadokan_select_type',true);
						$tp = strtolower(str_replace(" ", "-", $type));

                    ?>


						<!-- Start Single Featurs Box Here -->
						<div class="col-md-3 col-sm-6 col-xs-12  <?php echo esc_attr($teadokan_jlink); ?>">
							<div class="shop-cart-box">
								<div class="cart-price">
									<?php the_post_thumbnail(); ?>
									<a class="teashop-btn" href="<?php the_permalink();?>"><?php global $product; echo get_woocommerce_currency_symbol(); echo $product->get_price(); ?></a>
								</div>
								<div class="home-product-content">
									<p><?php echo wp_trim_words( get_the_content(), 10, '');?></p>
									<a href="<?php the_permalink();?>"><i class="fa fa-cart-plus"></i><?php echo esc_html('Add to Cart','teadokan');?></a>
								</div>
							</div>
						</div>
						<!-- Start Single Featurs Box Here -->

						<?php endif; endwhile; wp_reset_query();?>
					</div>
					<!-- Portfolio List Ends Here -->
				</div>
			</div>
		</div>
	</section>
	<!-- Ends Featurs Area -->