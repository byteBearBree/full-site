<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Byte_Bear_Blogss
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMGP7ZJ');</script>
<!-- End Google Tag Manager -->

<script data-ad-client="ca-pub-2667743747479767" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!--PINTEREST-->
<meta name="p:domain_verify" content="1786ba0f27920c486e78abadef115393"/>

<!---MAILCHIMP-->
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/6c73485cd3bf860c96e312b03/18b2af68a7db8812ab74aa2d5.js");</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/dd9fae1806.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="masthead" class="site site-header">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e( 'Skip to content', 'byte-bear-blogss' ); ?></a>
		<nav id="site-navigation" class="navbar navbar-expand navbar-dark">

			<ul class="navbar-nav mr-auto">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	=> 'primary-nav mr-auto',
						)
					);
				?>
			</ul>

			<div class="form-inline my-2 my-md-0">
				<?php get_template_part( 'template-parts/social-media-bar', 'none');?>
			</div>

		</nav>
	</header>

	<div class="site-logo">
		<?php the_custom_logo(); ?>
	</div>

