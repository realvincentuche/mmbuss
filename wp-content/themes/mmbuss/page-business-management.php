<?php
/**
 * Business Management service detail — exact client copy.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Business Management',
		'sub'   => 'Organizational structuring, governance, and performance systems that professionalize how you run.',
		'img'   => $uri . '/assets/images/service-business-management-banner.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap mm-split">
		<div class="reveal">
			<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-buildings"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Service / 01', 'mmbuss' ); ?></span></div>
			<h2 class="mm-section-title"><?php esc_html_e( 'Run professionally,', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'at every level', 'mmbuss' ); ?></span></h2>
			<ul class="mm-checks">
				<li><?php esc_html_e( 'Organizational structuring and governance', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Performance management systems', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Business process design and documentation', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Change management and transformation support', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Leadership and management advisory', 'mmbuss' ); ?></li>
			</ul>
			<p><a class="mm-btn mm-btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request This Service', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/hero-3.jpg' ); ?>" alt="<?php esc_attr_e( 'Business management advisory', 'mmbuss' ); ?>" loading="lazy">
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

<?php get_template_part( 'template-parts/other', 'services', array( 'current' => 'business-management' ) ); ?>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
