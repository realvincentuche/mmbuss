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
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'What We Do', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'Four disciplines, one accountable partner', 'mmbuss' ); ?></h2>
			<p class="mm-section-lead"><?php esc_html_e( 'Every engagement is tailored — select a discipline to see exactly what is covered.', 'mmbuss' ); ?></p>
		</div>
		<div class="mm-grid-2">
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-2.jpg' ); ?>" alt="<?php esc_attr_e( 'Business management', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<span class="mm-card-num">/ 01</span>
					<h3><?php esc_html_e( 'Business Management', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Organizational structuring and governance', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Performance management systems', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Business process design and documentation', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Change management and transformation support', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Leadership and management advisory', 'mmbuss' ); ?></li>
					</ul>
					<p style="margin-top:14px;"><a class="mm-card-link" href="<?php echo esc_url( home_url( '/services/business-management/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?></a></p>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/about-section.jpg' ); ?>" alt="<?php esc_attr_e( 'Consulting', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<span class="mm-card-num">/ 02</span>
					<h3><?php esc_html_e( 'Consulting', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Business strategy and growth planning', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Market entry and expansion advisory', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Feasibility studies and business case development', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Risk assessment and mitigation planning', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Corporate advisory for founders and executive teams', 'mmbuss' ); ?></li>
					</ul>
					<p style="margin-top:14px;"><a class="mm-card-link" href="<?php echo esc_url( home_url( '/services/consulting/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?></a></p>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/services-banner.jpg' ); ?>" alt="<?php esc_attr_e( 'Operational solutions', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<span class="mm-card-num">/ 03</span>
					<h3><?php esc_html_e( 'Operational Solutions', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Operations audits and process re-engineering', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Supply chain and logistics optimization', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Standard Operating Procedure (SOP) development', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Systems and workflow automation guidance', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Cost efficiency and resource optimization', 'mmbuss' ); ?></li>
					</ul>
					<p style="margin-top:14px;"><a class="mm-card-link" href="<?php echo esc_url( home_url( '/services/operational-solutions/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?></a></p>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-4.jpg' ); ?>" alt="<?php esc_attr_e( 'Supply of goods and services', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<span class="mm-card-num">/ 04</span>
					<h3><?php esc_html_e( 'Supply of Goods and Services', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Procurement and sourcing of goods, materials, and equipment', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Supply and distribution of goods to corporate, government, and institutional clients', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Vendor sourcing, vetting, and contract management', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Service delivery and fulfillment under supply agreements and contracts', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Import/export facilitation and trade logistics support', 'mmbuss' ); ?></li>
					</ul>
					<p style="margin-top:14px;"><a class="mm-card-link" href="<?php echo esc_url( home_url( '/services/supply-of-goods-and-services/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?></a></p>
				</div>
			</article>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
