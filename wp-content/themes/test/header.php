<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="container-fluid ">
			<div class="row  d-flex block">
				<div class="pos-f-t col-1 col-sm-2 col-md-1 header-menu-burger text-center">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/burger.png" class="burger" data-toggle="modal" data-target="#exampleModal2" alt="">
				</div>
				<div class="site-branding col col-sm-3 col-md col-lg-3 col-xl-2  text-center text-md-left text-lg-center ">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$test_description=get_bloginfo( 'description', 'display' );
					if ( $test_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $test_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<div class=" col-lg col-xl main-navigation-header">			
					<nav id="site-navigation" class="main-navigation ">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'test' ); ?></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
				
				
				<div class="col-8 col-sm-7 col-md col-lg-auto col-xl-6 text-lg-right text button-sm ">
					<div class="container">
						<div class="row ">
							<div class="phone-mather col  col-sm col-md col-lg-3 col-xl-auto text-lg-right offset-sm-2 offset-md-0 ">
								<div class="call-xl">
									<span class="call-now">Call now:</span>
									<a class="number " href="tel:+17003254245"> +1.700.325.4245</a>
								</div>
								<a href="#" class=""><img class="phone" src="<?php echo get_stylesheet_directory_uri() ?>/img/phone.png" alt=""></a>
							</div>
						
							<div class="col-auto col-sm-auto col-md-auto col-lg-9 col-xl-auto button-mather">
								<button type="headers" class="btn btn-primary btn-lg button headers" data-toggle="modal" data-target="#exampleModal">ASK A QUESTION</button>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" arial-labelledby="exampleModal" arial-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<?php echo do_shortcode( '[contact-form-7 id="30" title="Ask a Question:"]' ); ?>
				
				</div>
			</div>
		</div>

		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" arial-labelledby="exampleModal" arial-hidden="true">
			<div class="modal-dialog modal-dialog-menu" role="document">
				
				<div class="modal-content modal-content-menu">
				
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
					<img class="close-menu" src="<?php echo get_stylesheet_directory_uri() ?>/img/close.png" data-dismiss="modal" alt="">
				</div>
			</div>
		</div>
		
	</header><!-- #masthead -->

	

