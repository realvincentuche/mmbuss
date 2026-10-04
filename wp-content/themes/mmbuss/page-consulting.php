<?php
/**
 * Consulting service detail — exact client copy.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Consulting',
		'sub'   => 'Strategy, market entry, feasibility, and executive advisory for founders and leadership teams.',
		'img'   => $uri . '/assets/images/about-section.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap mm-split">
		<div class="reveal">
			<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-chart-line-up"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Service / 02', 'mmbuss' ); ?></span></div>
			<h2 class="mm-section-title"><?php esc_html_e( 'Clarity before', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'commitment', 'mmbuss' ); ?></span></h2>
			<ul class="mm-checks">
				<li><?php esc_html_e( 'Business strategy and growth planning', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Market entry and expansion advisory', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Feasibility studies and business case development', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Risk assessment and mitigation planning', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Corporate advisory for founders and executive teams', 'mmbuss' ); ?></li>
			</ul>
			<p><a class="mm-btn mm-btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request This Service', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/home-slide-business-district.jpg' ); ?>" alt="<?php esc_attr_e( 'Consulting strategy review', 'mmbuss' ); ?>" loading="lazy">
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

<?php get_template_part( 'template-parts/retainership', 'cta' ); ?>

<?php get_template_part( 'template-parts/other', 'services', array( 'current' => 'consulting' ) ); ?>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
