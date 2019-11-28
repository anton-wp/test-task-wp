<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="content">	
		<div class="container">
			<div class="row  d-flex footer-block ">
				<div class="col-12 col-sm-12 col-md-6 col-lg-5">
					<div class="container">
						<div class="row d-flex">
							<div class="site-branding col-12 col-md-12 col-md-6 col-lg-6 col-xl-6 text-lg-left text-center ">
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
								$test_description = get_bloginfo( 'description', 'display' );
								if ( $test_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo $test_description; /* WPCS: xss ok. */ ?></p>
								<?php endif; ?>
							</div><!-- .site-branding -->
							<div class="site-branding col-12 col-sm-12  col-md-12 col-lg-4 col-xl container footer_menu text-center">			
								<nav id="site-navigation" class="main-navigation">
									<h2 class="main-menu">MAIN MENU</h2>
									
									<?php
									wp_nav_menu( array(
										'theme_location' => 'footer-menu',
										
									) );
									?>
								</nav><!-- #site-navigation -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-7">
					<div class="container">
						<div class="row d-flex">
							<div class="col-12 col-sm-12  col-md-12 col-lg-6 col-6 footer-call text-center">
								
								<div class="">
									<?php dynamic_sidebar( 'footer-column-3' ); ?>
								</div>
							</div>	
							<div class="col-12 col-md-12 col-lg-6 col-xl-6 text-md-left text-center">
								<h2>SUBSCRIBE TO OUR NEWS</h2>
								<h3>Subscribe to our news and promotions!</h3>
								<input type="text" name="text " placeholder="Your email address" class="input ">
								<button type="button" class="btn btn-primary btn-lg footer-button button" >Subscribe</button>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-12">
					<hr class="footer-line">
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-8 text-md-left text-center">
					<p class="min-footer-text">Copyright © GoVegan, llc. All rights reserved 2019</p>
				</div>
				<div class="col-12 col-sm-12 col-md-5 col-lg-4 text-md-right text-center">
					<p class="min-footer-text">Education Project by <span class="orange">Paspartoo</span></p>
				</div>
			</div>
		</div>
	</div>									
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
