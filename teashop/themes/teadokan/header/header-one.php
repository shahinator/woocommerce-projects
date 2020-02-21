<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teadokan
 */
global $teadokan_opt;

?>
	<!-- Start The Header Here -->
	<header>
		<?php if (!empty($teadokan_opt['teadokan_header_topbar']) && $teadokan_opt['teadokan_header_topbar'] == 1) { ?>
		<!-- Start Header Top Here -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-8 col-md-4">
						<div class="top-bar text-right">
						<?php if (!empty($teadokan_opt['teadokan_scrolltotop']) && $teadokan_opt['teadokan_scrolltotop'] == 1) { ?>
							<div class="phone"><i class="fa fa-phone"></i>							
							<?php 
								echo esc_html($teadokan_opt['teadokan_header_topbar_phone_number']);
							?>
						<?php } ?> 

							</div>
							<!-- start mini  cart-->
							<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
							?>
							<div class="header-cart">
								<?php
								$count = WC()->cart->cart_contents_count;
								?>
								<a class="cart-contents icon icon-shop-cart" href="javascript:void(0)<?php //echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart','teadokan' ); ?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i><?php
									if ( $count > 0 ) {
									?>									
										<?php echo esc_html( $count ); ?>
									<?php            
									}
								?>
								</a>

								<div class="header-cart-dropdown">
									<?php get_template_part('woocommerce/cart/mini','cart');?>
								</div>
							</div>
							<?php } ?>
							<!--stop mini cart-->					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Ends Header Top Here -->
		<?php } ?>


		<!-- Start The Navigation Here -->
		<nav class="navigation-area stickyNav">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1 class="brand-logo">
						<a href="<?php echo esc_url(home_url('/')); ?>">
                        	<img src="<?php echo esc_url(teadokan_logo_url(TEADOKAN_IMAGES . '/logo.png'));?>" alt="<?php bloginfo('name') ?>">
                       </a> 
					</h1>

				</div>
				<div class="collapse navbar-collapse">
					<?php teadokan_main_menu(); ?>
				</div>
			</div>
		</nav>
		<!-- Navigation Ends Here -->
	</header>
	<!-- Header Ends Here -->

