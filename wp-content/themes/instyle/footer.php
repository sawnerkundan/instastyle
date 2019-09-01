<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	<!-- </div> -->
	<!-- #content -->
	
		<!-- Back to top -->
		<div class="container">
			<div class="backtotop">
				<div class="up-btn" id="backTotop">UP</div>
			</div>
		</div>
		
		<!-- Footer section -->
		<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget fw-about">
						<img src="http://localhost/instyle/wp-content/uploads/2019/08/footer-logo.png" alt="">
						<p>Velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesu ada. In arcu justo, sagittis consequat pulvinar.</p>
						<div class="fw-social">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget resent-post">
						<h2 class="fw-title">Recent Posts</h2>
						<div class="rp-item">
							<h4>Paris Fashion Week</h4>
							<span>20 January 2019</span>
						</div>
						<div class="rp-item">
							<h4>About Our Fashion App</h4>
							<span>20 January 2019</span>
						</div>
						<div class="rp-item">
							<h4>Simple Blog Post</h4>
							<span>20 January 2019</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Usefull Links</h2>
						<ul>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Reviews</a></li>
							<li><a href="#">Marketing</a></li>
							<li><a href="#">Subscribe</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2 class="fw-title">Contact</h2>
						<ul>
							<li><span>Address:</span>Main Str, no 23, New York</li>
							<li><span>Phone:</span>+546 990221 123</li>
							<li><span>Mail:</span>model@contact.com</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

		</div>
	</footer>
	<!-- Footer section end -->

	

	<!-- <footer id="colophon" class="site-footer"> -->
		<?php // get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<!-- <div class="site-info"> -->
			<?php // $blog_info = get_bloginfo( 'name' ); ?>
			<?php // if ( ! empty( $blog_info ) ) : ?>
				<!-- <a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>, -->
			<?php //endif; ?>
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentynineteen' ) ); ?>" class="imprint"> -->
				<?php
				/* translators: %s: WordPress. */
				// printf( __( 'Proudly powered by %s.', 'twentynineteen' ), 'WordPress' );
				?>
			<!-- </a> -->
			<?php
			// if ( function_exists( 'the_privacy_policy_link' ) ) {
			// 	the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			// }
			?>
			<?php // if ( has_nav_menu( 'footer' ) ) : ?>
				<!-- <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>"> -->
					<?php
					// wp_nav_menu(
					// 	array(
					// 		'theme_location' => 'footer',
					// 		'menu_class'     => 'footer-menu',
					// 		'depth'          => 1,
					// 	)
					// );
					?>
				<!-- </nav> -->
				<!-- .footer-navigation -->
			<?php // endif; ?>
		<!-- </div> -->
		<!-- .site-info -->
	<!-- </footer> -->
	<!-- #colophon -->

<!-- </div> -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
