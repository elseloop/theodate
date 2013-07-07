<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<?php // Facebook 
	
	/* ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  //js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=177914409043426"; <-- @TODO use real FBSDK ID
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	*/ ?>

<div class="fancy-wrap"> <?php // contains footer in wrapping content box; closed in footer.php ?>

	<div class="outer-wrap"> <?php // used for faux sticky footer; closed in footer.php ?>
		
		<div class="contain-to-grid">
			<nav class="top-bar row">
				<ul class="title-area">
					<li class="name"><h1><a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1></li>
					<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
				</ul>

				<section class="top-bar-section">
					
					<ul class="right top-search">
						<li class="has-form"><?php get_search_form( $echo = true ); ?></li><?php
						// main menu
						wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) );
					?></ul>
				
				</section>
			</nav>
		</div> <?php // /.contain-to-grid ?>

		<div class="inner-wrap"> <?php // closed in footer.php