<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<style>
	form.wpcf7-form {
		    padding-left: 16px;
    padding-right: 16px;
    /* padding-top: 0px; */
    border: 1px solid #452265;
    border-radius: 21px;
		    margin-top: 40px;
	
	}
	input[type='text'],input[type="tel"],input[type="number"]{
		    border: 1px solid rgb(69, 34, 101);
    border-radius: 10px;
	}
	.row .row:not(.row-collapse){
		margin-top:15px;
	}
	input[type='submit']:not(.is-form){
		border : 1px solid black;
		border-radius: 30px;
		
	}
	.text-left {
		color:black;
		
	}
	</style>
<body <?php body_class(); // Body classes is added from inc/helpers-frontend.php ?>>

<?php do_action( 'flatsome_after_body_open' ); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

<?php do_action('flatsome_before_header'); ?>

<header id="header" class="header <?php flatsome_header_classes();  ?>">
   <div class="header-wrapper">
	<?php
		get_template_part('template-parts/header/header', 'wrapper');
	?>
   </div><!-- header-wrapper-->
</header>

<?php do_action('flatsome_after_header'); ?>

<main id="main" class="<?php flatsome_main_classes();  ?>">
