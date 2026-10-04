<?php
/**
 * Other services cross-navigation for service detail pages.
 *
 * Expects $args: current (slug to exclude).
 *
 * @package MMBuss
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$current = isset( $args['current'] ) ? $args['current'] : '';
$uri     = get_template_directory_uri();

$all = array(
	array(
		'slug'  => 'business-management',
		'num'   => '/ 01',
		'icon'  => 'ph-buildings',
		'img'   => $uri . '/assets/images/hero-2.jpg',
		'title' => 'Business Management',
		'text'  => 'Structuring, governance, and performance systems that professionalize how you run.',
	),
	array(
		'slug'  => 'consulting',
		'num'   => '/ 02',
		'icon'  => 'ph-chart-line-up',
		'img'   => $uri . '/assets/images/about-section.jpg',
		'title' => 'Consulting',
		'text'  => 'Growth planning, market entry, feasibility, and executive-level advisory.',
	),
	array(
		'slug'  => 'operational-solutions',
		'num'   => '/ 03',
		'icon'  => 'ph-gear-six',
		'img'   => $uri . '/assets/images/services-banner.jpg',
		'title' => 'Operational Solutions',
		'text'  => 'Audits, re-engineering, SOPs, and automation guidance that cut waste.',
	),
	array(
		'slug'  => 'supply-of-goods-and-services',
		'num'   => '/ 04',
		'icon'  => 'ph-factory',
		'img'   => $uri . '/assets/images/hero-4.jpg',
		'title' => 'Supply of Goods and Services',
		'text'  => 'Sourcing, procurement, fulfillment, and trade logistics you can rely on.',
	),
);
?>

<section class="mm-section-tight">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'Keep Exploring', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( 'Other', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'services', 'mmbuss' ); ?></span></h2>
			</div>
			<div class="mm-head-side">
				<p class="mm-section-lead"><?php esc_html_e( 'Every engagement is tailored — see what else is covered.', 'mmbuss' ); ?></p>
				<a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'All Services', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="mm-grid-3">
			<?php foreach ( $all as $svc ) : ?>
				<?php if ( $svc['slug'] === $current ) { continue; } ?>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $svc['img'] ); ?>" alt="<?php echo esc_attr( $svc['title'] ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph <?php echo esc_attr( $svc['icon'] ); ?>"></i></span><span class="mm-svc-num"><?php echo esc_html( $svc['num'] ); ?></span></div>
					<h3><?php echo esc_html( $svc['title'] ); ?></h3>
					<p><?php echo esc_html( $svc['text'] ); ?></p>
					<p class="mm-card-cta"><a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/' . $svc['slug'] . '/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
