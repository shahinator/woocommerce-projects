<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TeaDokan
 */
global $teadokan_opt;
$teadokan_head_layout = get_post_meta(get_the_ID(),'teadokan_header_layout',true); 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


<?php 
	switch ($teadokan_head_layout) {
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
