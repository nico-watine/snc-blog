<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="theme-color" content="#566372">
  <meta name="color-scheme" content="light dark">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'modernize' ); ?></a>

	<header id="header" class="header" role="banner">
		<?php the_custom_logo(); ?>
		<?php
		if ( is_front_page() && is_home() ) : ?>
			<h1 class="monospace header__title"><a href="/" rel="home">Studio N Creations</a></h1>
		<?php else : ?>
			<p class="monospace header__title"><a href="/" rel="home">Studio N Creations</a></p>
		<?php
		endif;

		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p class="header__description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
		<?php
		endif; ?>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<button class="toggle-btn js-toggle" aria-expanded="false">
			<span></span>
			<span class="screen-reader-text">menu</span>
		</button>
		<?php endif; ?>

	</header><!-- .header -->

	<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="gnav monospace" role="navigation" aria-hidden="true">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'primary-menu',
			 ) );
		?>

    <label class="dark-toggle">
      <input type="checkbox">
      <div class="dark-toggle__switch" tabindex="0"></div>
      <span>Dark Mode</span>
    </label>

	</nav><!-- #site-navigation -->
	<?php endif; ?>

	<?php if ( is_home() ) : ?>
		<?php if ( get_header_image() ) : ?>
		<div class="main-visual">
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" class="main-visual__img">
		</div>
		<?php endif; ?>
	<?php endif; ?>

	<div id="content" class="site-content">
