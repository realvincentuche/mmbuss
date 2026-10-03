<?php
/**
 * Branded not-found page.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();
?>

<section class="mm-banner mm-banner-404">
	<div class="mm-banner-bg" style="background-image:url('<?php echo esc_url( $uri . '/assets/images/about-banner.jpg' ); ?>')"></div>
	<div class="mm-wrap mm-banner-inner">
		<p class="mm-kicker mm-kicker-dark"><?php esc_html_e( '404 / Page not found', 'mmbuss' ); ?></p>
		<h1 class="mm-banner-title"><?php esc_html_e( 'This page is off the map.', 'mmbuss' ); ?></h1>
		<p class="mm-banner-sub"><?php esc_html_e( 'The address may have changed, or the page may no longer be available. Choose a destination below and we will help you find your way.', 'mmbuss' ); ?></p>
		<div class="mm-404-actions">
			<a class="mm-btn mm-btn-gold" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'mmbuss' ); ?> <span aria-hidden="true">&rarr;</span></a>
			<a class="mm-btn mm-btn-ghost-light" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore Services', 'mmbuss' ); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
