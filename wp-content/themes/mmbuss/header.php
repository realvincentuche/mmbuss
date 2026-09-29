<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="mm-preloader" id="mmPreloader" aria-hidden="true">
	<div class="mm-preloader-inner">
		<span class="mm-preloader-logo">Mastermind<span class="mm-dot">.</span></span>
		<span class="mm-preloader-bar"><span></span></span>
	</div>
</div>

<div class="mm-topbar">
	<div class="mm-wrap mm-topbar-inner">
		<span class="mm-topbar-item"><?php echo esc_html( mmbuss_contact( 'office' ) ); ?></span>
		<span class="mm-topbar-sep" aria-hidden="true"></span>
		<a class="mm-topbar-item" href="mailto:<?php echo esc_attr( mmbuss_contact( 'email' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'email' ) ); ?></a>
		<span class="mm-topbar-sep" aria-hidden="true"></span>
		<a class="mm-topbar-item" href="<?php echo esc_attr( mmbuss_contact( 'phone_href' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'phone' ) ); ?></a>
	</div>
</div>

<header class="mm-header" id="mmHeader">
	<div class="mm-wrap mm-header-inner">
		<a class="mm-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Mastermind home', 'mmbuss' ); ?>">Mastermind<span class="mm-dot">.</span></a>
		<button class="mm-nav-toggle" id="mmNavToggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'mmbuss' ); ?>" aria-expanded="false">
			<span></span><span></span><span></span>
		</button>
		<nav class="mm-nav" id="mmNav" aria-label="<?php esc_attr_e( 'Primary', 'mmbuss' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => 'mmbuss_menu_fallback',
				)
			);
			?>
			<a class="mm-btn mm-btn-sm mm-nav-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Proposal', 'mmbuss' ); ?></a>
		</nav>
	</div>
</header>

<main id="content" class="mm-main">
