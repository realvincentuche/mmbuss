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
		'img'   => $uri . '/assets/images/hero-2.jpg',
		'title' => 'Startups and Emerging Enterprises',
		'text'  => 'Direction, structure, and strategy for ventures finding their footing and seeking sustainable footing for growth.',
	),
	array(
		'img'   => $uri . '/assets/images/hero-1.jpg',
		'title' => 'Corporate and Institutional Clients',
		'text'  => 'Governance, performance systems, and transformation support for established organizations and institutions.',
	),
	array(
		'img'   => $uri . '/assets/images/hero-4.jpg',
		'title' => 'Trade, Logistics, and Supply Chain Businesses',
		'text'  => 'Optimization across sourcing, movement, fulfillment, and trade logistics for operators and distributors.',
	),
	array(
		'img'   => $uri . '/assets/images/industries-banner.jpg',
		'title' => 'Real Estate and Infrastructure',
		'text'  => 'Structured advisory for developers, operators, and infrastructure stakeholders managing complex portfolios.',
	),
	array(
		'img'   => $uri . '/assets/images/about-section.jpg',
		'title' => 'Financial and Professional Services',
		'text'  => 'Operational discipline and strategic clarity for firms where trust and precision decide everything.',
	),
	array(
		'img'   => $uri . '/assets/images/services-banner.jpg',
		'title' => 'Nonprofit and Development Organizations',
		'text'  => 'Frameworks and oversight that help mission-driven organizations deliver measurable, lasting impact.',
	),
);
?>

<section class="mm-section">
	<div class="mm-wrap">
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Who We Help', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'Six sectors, one standard: measurable results', 'mmbuss' ); ?></h2>
		</div>
		<div class="mm-grid-3" style="margin-top:36px;">
			<?php foreach ( $industries as $ind ) : ?>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $ind['img'] ); ?>" alt="<?php echo esc_attr( $ind['title'] ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<h3><?php echo esc_html( $ind['title'] ); ?></h3>
					<p><?php echo esc_html( $ind['text'] ); ?></p>
				</div>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
