<?php
/**
 * The Header File
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package bikebaer
 * @since Bikebaer Custom Theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <title><?php echo get_the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark" />
    
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<?php if ( is_front_page() ) { ?>

		<?php $bgImage = get_theme_mod( 'header_image' ); ?>

		<section id="header" style="background-image:url('<?php echo $bgImage['url']; ?>');">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 h-100 g-0">

						<div class="logo-wrapper">
							<div class="gradient">
								<a href="/"><img id="logo" src="<?php echo get_theme_file_uri( 'images/bikebaer-inverted.svg' ); ?>" alt="<?php echo get_the_title(); ?>" /></a>
							</div>
						</div>

						<div class="cta h-100">
							<a href="<?php echo get_theme_mod( 'button_url' ); ?>" class="btn btn-primary btn-large"><?php echo get_theme_mod( 'button_text' ); ?></a>
						</div>

						<div class="ico animated">
							<div class="circle circle-top"></div>  
							<div class="circle circle-main"></div>
							<div class="circle circle-bottom"></div>
							<svg class="svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve" >
								<defs>
								<clipPath id="cut-off-arrow">
									<circle cx="306" cy="306" r="287"/>
								</clipPath>
								<filter id="goo">
									<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
									<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
									<feBlend in="SourceGraphic" in2="goo" />
								</filter>
								</defs>
								<path  class="st-arrow" d="M317.5,487.6c0.3-0.3,0.4-0.7,0.7-1.1l112.6-112.6c6.3-6.3,6.3-16.5,0-22.7c-6.3-6.3-16.5-6.3-22.7,0
											l-86,86V136.1c0-8.9-7.3-16.2-16.2-16.2c-8.9,0-16.2,7.3-16.2,16.2v301.1l-86-86c-6.3-6.3-16.5-6.3-22.7,0
											c-6.3,6.3-6.3,16.5,0,22.7l112.7,112.7c0.3,0.3,0.4,0.7,0.7,1c0.5,0.5,1.2,0.5,1.7,0.9c1.7,1.4,3.6,2.3,5.6,2.9
											c0.8,0.2,1.5,0.4,2.3,0.4C308.8,492.6,313.8,491.3,317.5,487.6z"/>
							</svg>
						</div><!-- /.ico animated -->

					</div>
				</div>
			</div><!-- /.container -->
		</section><!-- /#header -->

	<?php } else { ?>

		<section id="header">
			<div class="container">
				<div class="row">
					<div class="col-12 g-0">

						<div class="logo-wrapper">
							<div class="gradient">
								<a href="/"><img id="logo" src="<?php echo get_theme_file_uri( 'images/bikebaer.svg' ); ?>" alt="<?php echo get_the_title(); ?>" /></a>
							</div>
						</div>

					</div>
				</div>
			</div><!-- /.container -->
		</section><!-- /.storefront -->


	<?php } ?>