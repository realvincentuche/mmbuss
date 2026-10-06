<?php
/**
 * Industries We Serve — exact client copy.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Industries We Serve',
		'sub'   => 'Fresh perspective and proven frameworks, applied precisely to your sector.',
		'img'   => $uri . '/assets/images/industries-banner.jpg',
	)
);

$industries = array(
	array(
		'img'   => $uri . '/assets/images/industry-startups.jpg',
		'badge' => 'Startups',
		'num'   => '/ 01',
		'icon'  => 'ph-rocket',
		'title' => 'Startups and Emerging Enterprises',
		'text'  => 'Direction, structure, and strategy for ventures finding their footing and seeking sustainable growth.',
	),
	array(
		'img'   => $uri . '/assets/images/industry-corporate.jpg',
		'badge' => 'Corporate',
		'num'   => '/ 02',
		'icon'  => 'ph-buildings',
		'title' => 'Corporate and Institutional Clients',
		'text'  => 'Governance, performance systems, and transformation support for established organizations and institutions.',
	),
	array(
		'img'   => $uri . '/assets/images/industry-logistics.jpg',
		'badge' => 'Logistics',
		'num'   => '/ 03',
		'icon'  => 'ph-truck',
		'title' => 'Trade, Logistics, and Supply Chain Businesses',
		'text'  => 'Optimization across sourcing, movement, fulfillment, and trade logistics for operators and distributors.',
	),
	array(
		'img'   => $uri . '/assets/images/industry-realestate.jpg',
		'badge' => 'Real Estate',
		'num'   => '/ 04',
		'icon'  => 'ph-house',
		'title' => 'Real Estate and Infrastructure',
		'text'  => 'Structured advisory for developers, operators, and infrastructure stakeholders managing complex portfolios.',
	),
	array(
		'img'   => $uri . '/assets/images/industry-financial.jpg',
		'badge' => 'Financial',
		'num'   => '/ 05',
		'icon'  => 'ph-bank',
		'title' => 'Financial and Professional Services',
		'text'  => 'Operational discipline and strategic clarity for firms where trust and precision decide everything.',
	),
	array(
		'img'   => $uri . '/assets/images/industry-nonprofit.jpg',
		'badge' => 'Nonprofit',
		'num'   => '/ 06',
		'icon'  => 'ph-heart',
		'title' => 'Nonprofit and Development Organizations',
		'text'  => 'Frameworks and oversight that help mission-driven organizations deliver measurable, lasting impact.',
	),
);
?>

<section class="mm-section">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'Who We Help', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( 'Six sectors, one standard:', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'measurable results', 'mmbuss' ); ?></span></h2>
			</div>
			<div class="mm-head-side">
				<p class="mm-section-lead"><?php esc_html_e( 'Select your sector — every engagement is tailored to where you operate and where you are headed.', 'mmbuss' ); ?></p>
			</div>
		</div>
		<div class="mm-grid-3">
			<?php foreach ( $industries as $ind ) : ?>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $ind['img'] ); ?>" alt="<?php echo esc_attr( $ind['title'] ); ?>" loading="lazy"><span class="mm-card-badge"><?php echo esc_html( $ind['badge'] ); ?></span></div>
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph <?php echo esc_attr( $ind['icon'] ); ?>"></i></span><span class="mm-svc-num"><?php echo esc_html( $ind['num'] ); ?></span></div>
					<h3><?php echo esc_html( $ind['title'] ); ?></h3>
					<p><?php echo esc_html( $ind['text'] ); ?></p>
					<p class="mm-card-cta"><a class="mm-text-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Discuss Your Sector', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
				</div>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<hr class="mm-rule">

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
