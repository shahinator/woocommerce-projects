<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cleanhit
 */
global $cleanhit_opt;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<?php
	$cleanhit_head_layout = get_post_meta(get_the_ID(),'cleanhit_header_layout',true); 
	
?>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<?php if (!empty($cleanhit_opt['cleanhit_loader']) && $cleanhit_opt['cleanhit_loader'] == 1) { ?>
		<!-- Preloader start -->
		<div id="preloader"></div>
	<?php } ?>

	<?php if (!empty($cleanhit_opt['cleanhit_minicart']) && $cleanhit_opt['cleanhit_minicart'] == 1) { 
	?>
	<div class="main-minicart-area">
		<!-- start mini  cart-->
		<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		?>
		<div class="header-cart">
			<?php
			$count = WC()->cart->cart_contents_count;
			?>
			<a class="cart-contents icon icon-shop-cart" href="javascript:void(0)<?php //echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart','cleanhit' ); ?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i><?php
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
	<?php } ?>

<?php 
	switch ($cleanhit_head_layout) {
		case 'head_one':
			//echo "header one";
			get_template_part('header/header','one');
			break;
		case 'head_two':
			get_template_part('header/header','two');
			//echo "header two";
			break;
		default:
		//echo "header nai";
		get_template_part('header/header','one');
	}
?>

<div id="content" class="site-content">
