<?php
/**
 * Services overview — exact client copy.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Our Services',
		'sub'   => 'Four pillars covering how your organization is structured, guided, operated, and supplied.',
		'img'   => $uri . '/assets/images/services-banner.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'What We Do', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( 'Four disciplines, one', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'accountable partner', 'mmbuss' ); ?></span></h2>
			</div>
			<div class="mm-head-side">
				<p class="mm-section-lead"><?php esc_html_e( 'Every engagement is tailored — select a discipline to see exactly what is covered.', 'mmbuss' ); ?></p>
			</div>
		</div>
		<div class="mm-grid-2">
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/service-business-management.jpg' ); ?>" alt="<?php esc_attr_e( 'Business management', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-buildings"></i></span><span class="mm-svc-num">/ 01</span></div>
					<h3><?php esc_html_e( 'Business Management', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Organizational structuring and governance', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Performance management systems', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Process design, change, and leadership advisory', 'mmbuss' ); ?></li>
					</ul>
					<p class="mm-card-cta"><a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/business-management/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/about-section.jpg' ); ?>" alt="<?php esc_attr_e( 'Consulting', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-chart-line-up"></i></span><span class="mm-svc-num">/ 02</span></div>
					<h3><?php esc_html_e( 'Consulting', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Business strategy and growth planning', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Market entry and expansion advisory', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Feasibility, risk, and executive advisory', 'mmbuss' ); ?></li>
					</ul>
					<p class="mm-card-cta"><a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/consulting/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/services-banner.jpg' ); ?>" alt="<?php esc_attr_e( 'Operational solutions', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-gear-six"></i></span><span class="mm-svc-num">/ 03</span></div>
					<h3><?php esc_html_e( 'Operational Solutions', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Operations audits and process re-engineering', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Supply chain and logistics optimization', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'SOPs, workflow automation, and cost efficiency', 'mmbuss' ); ?></li>
					</ul>
					<p class="mm-card-cta"><a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/operational-solutions/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-4.jpg' ); ?>" alt="<?php esc_attr_e( 'Supply of goods and services', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-factory"></i></span><span class="mm-svc-num">/ 04</span></div>
					<h3><?php esc_html_e( 'Supply of Goods and Services', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Procurement and sourcing of goods, materials, and equipment', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Supply and distribution of goods to corporate, government, and institutional clients', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Vendor management, fulfillment, and trade logistics', 'mmbuss' ); ?></li>
					</ul>
					<p class="mm-card-cta"><a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/supply-of-goods-and-services/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</article>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/retainership', 'cta' ); ?>

<div class="mm-marquee-tilt" aria-hidden="true">
	<div class="mm-marquee">
		<div class="mm-marquee-track">
			<span>Strategy <i>&#10022;</i> Structure <i>&#10022;</i> Operations <i>&#10022;</i> Supply <i>&#10022;</i> Growth <i>&#10022;</i> Strategy <i>&#10022;</i> Structure <i>&#10022;</i> Operations <i>&#10022;</i> Supply <i>&#10022;</i> Growth <i>&#10022;</i>&nbsp;</span>
			<span>Strategy <i>&#10022;</i> Structure <i>&#10022;</i> Operations <i>&#10022;</i> Supply <i>&#10022;</i> Growth <i>&#10022;</i> Strategy <i>&#10022;</i> Structure <i>&#10022;</i> Operations <i>&#10022;</i> Supply <i>&#10022;</i> Growth <i>&#10022;</i>&nbsp;</span>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
