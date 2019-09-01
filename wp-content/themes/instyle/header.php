<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- <div id="page" class="site"> -->
<!-- <div id="page" > -->
	<header class="header-section">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark site-navbar">
			<a class="navbar-brand site-logo" href="index.html#">
				<h2><span>In</span>Style</h2>
				<p>Fashion Forward</p>
			</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<!-- Main menu -->
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/instyle/about">the Brand</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/instyle/portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Shop</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/instyle/blog">blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/instyle/contact">Contact</a>
					</li>                                                                
				</ul>
				<div class="social-links my-2 my-lg-0">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</nav>
	</header>
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a> -->

		<!-- <header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>"> -->

			<!-- <div class="site-branding-container">
				<?php // get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div> -->
			<!-- .site-branding-container -->

			<?php // if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<!-- <div class="site-featured-image">
					<?php
					// 	twentynineteen_post_thumbnail();
					// 	the_post();
					// 	$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

					// 	$classes = 'entry-header';
					// if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
					// 	$classes = 'entry-header has-discussion';
					// }
					?> -->
					<!-- <div class="<?php echo $classes; ?>">
						<?php // get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div> -->
					<!-- .entry-header -->
					<?php //rewind_posts(); ?>
				<!-- </div> -->
			<?php //endif; ?>
		<!-- </header> -->
		<!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
	<!-- <div id="content" > -->
