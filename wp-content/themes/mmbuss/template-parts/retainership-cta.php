<?php
/**
 * Retainership application CTA band — shared by the Services overview
 * and all four service detail pages.
 *
 * @package MMBuss
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="mm-section-tight">
	<div class="mm-wrap">
		<article class="mm-card reveal">
			<div class="mm-card-body">
				<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-handshake"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Investor Solicitation', 'mmbuss' ); ?></span></div>
				<h3><?php esc_html_e( 'Seeking capital for your project?', 'mmbuss' ); ?></h3>
				<p><?php esc_html_e( 'Our investor-solicitation retainership opens the door to prospective investors — apply with a US $5,000.00 commitment to begin.', 'mmbuss' ); ?></p>
				<p class="mm-card-cta"><a class="mm-btn mm-btn-gold" href="<?php echo esc_url( home_url( '/retainership-application/' ) ); ?>"><?php esc_html_e( 'Start Your Application', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
			</div>
		</article>
	</div>
</section>
