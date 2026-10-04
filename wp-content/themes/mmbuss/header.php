<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<?php if ( is_front_page() ) : ?>
<link rel="preload" as="image" fetchpriority="high" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-slide-business-district.jpg' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="mm-skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'mmbuss' ); ?></a>

<div class="mm-preloader" id="mmPreloader" aria-hidden="true">
	<span class="mm-preloader-spinner" aria-hidden="true"></span>
</div>

<header class="mm-header" id="mmHeader">
	<div class="mm-wrap mm-header-inner">
		<a class="mm-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Mastermind home', 'mmbuss' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-mark-white.png' ); ?>" alt="<?php esc_attr_e( 'Mastermind', 'mmbuss' ); ?>"><span class="mm-brand-text">Mastermind<span class="mm-dot">.</span></span></a>
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
		</nav>
		<div class="mm-header-actions">
			<a class="mm-btn mm-btn-gold mm-btn-sm mm-nav-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Proposal', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			<button class="mm-burger" id="mmBurger" aria-label="<?php esc_attr_e( 'Open menu', 'mmbuss' ); ?>" aria-expanded="false" aria-controls="mmOffcanvas">
				<span></span><span></span><span></span>
			</button>
		</div>
	</div>
</header>

<div class="mm-offcanvas-overlay" id="mmOffcanvasOverlay" aria-hidden="true" inert></div>
<aside class="mm-offcanvas" id="mmOffcanvas" role="dialog" aria-modal="true" aria-hidden="true" inert aria-label="<?php esc_attr_e( 'Site menu', 'mmbuss' ); ?>">
	<button class="mm-offcanvas-close" id="mmOffcanvasClose" aria-label="<?php esc_attr_e( 'Close menu', 'mmbuss' ); ?>">&times;</button>
	<a class="mm-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-mark-white.png' ); ?>" alt="<?php esc_attr_e( 'Mastermind', 'mmbuss' ); ?>"></a>
	<nav aria-label="<?php esc_attr_e( 'Offcanvas', 'mmbuss' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => false,
				'fallback_cb'    => 'mmbuss_menu_fallback',
			)
		);
		?>
	</nav>
	<div class="mm-offcanvas-contact">
		<p class="mm-offcanvas-label"><?php esc_html_e( 'Get in Touch', 'mmbuss' ); ?></p>
		<p><a href="mailto:<?php echo esc_attr( mmbuss_contact( 'email' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'email' ) ); ?></a></p>
		<p><a href="<?php echo esc_attr( mmbuss_contact( 'phone_href' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'phone' ) ); ?></a></p>
		<p><?php esc_html_e( 'Toll Free: ', 'mmbuss' ); ?><?php echo esc_html( mmbuss_contact( 'tollfree' ) ); ?></p>
		<p><?php echo esc_html( mmbuss_contact( 'office' ) ); ?></p>
		<p><a class="mm-btn mm-btn-gold mm-btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Proposal', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
	</div>
</aside>

<main id="content" class="mm-main">
