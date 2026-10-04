<?php
/**
 * Operational Solutions service detail — exact client copy.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Operational Solutions',
		'sub'   => 'Audits, re-engineering, SOPs, and automation guidance that remove waste and unlock scale.',
		'img'   => $uri . '/assets/images/services-banner.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap mm-split">
		<div class="reveal">
			<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-gear-six"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Service / 03', 'mmbuss' ); ?></span></div>
			<h2 class="mm-section-title"><?php esc_html_e( 'Operations engineered', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'to scale', 'mmbuss' ); ?></span></h2>
			<ul class="mm-checks">
				<li><?php esc_html_e( 'Operations audits and process re-engineering', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Supply chain and logistics optimization', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Standard Operating Procedure (SOP) development', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Systems and workflow automation guidance', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Cost efficiency and resource optimization', 'mmbuss' ); ?></li>
			</ul>
			<p><a class="mm-btn mm-btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request This Service', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/home-slide-logistics.jpg' ); ?>" alt="<?php esc_attr_e( 'Operations analysis', 'mmbuss' ); ?>" loading="lazy">
		</div>
	</div>
</section>

<div class="mm-marquee-tilt" aria-hidden="true">
	<div class="mm-marquee">
		<div class="mm-marquee-track">
			<span>Strategy <i>&#10022;</i> Structure <i>&#10022;</i> Operations <i>&#10022;</i> Supply <i>&#10022;</i> Growth <i>&#10022;</i> Strategy <i>&#10022;</i> Structure <i>&#10022;</i> Operations <i>&#10022;</i> Supply <i>&#10022;</i> Growth <i>&#10022;</i>&nbsp;</span>
			<span>Strategy <i>&#10022;</i> Structure <i>&#10022;</i> Operations <i>&#10022;</i> Supply <i>&#10022;</i> Growth <i>&#10022;</i> Strategy <i>&#10022;</i> Structure <i>&#10022;</i> Operations <i>&#10022;</i> Supply <i>&#10022;</i> Growth <i>&#10022;</i>&nbsp;</span>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/other', 'services', array( 'current' => 'operational-solutions' ) ); ?>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
