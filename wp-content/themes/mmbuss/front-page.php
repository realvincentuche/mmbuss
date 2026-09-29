<?php
/**
 * Coming-soon homepage (v1).
 *
 * Baked-in design from git. The dynamic section below renders live DB
 * content only when the Home page has content in wp-admin.
 *
 * @package MMBuss
 */

get_header();

$uri = get_template_directory_uri();
$slides = array(
	array(
		'img'      => $uri . '/assets/images/hero-1.jpg',
		'eyebrow'  => 'Business Management — Consulting — Operational Solutions',
		'title'    => 'Engineering Excellence. Empowering Growth.',
		'text'     => 'Mastermind Business Systems LLC is a global business management and consulting firm dedicated to transforming how organizations operate, compete, and grow.',
		'cta1'     => array( 'Start a Conversation', home_url( '/contact/' ), 'mm-btn mm-btn-gold' ),
		'cta2'     => array( 'Explore Services', home_url( '/services/' ), 'mm-btn mm-btn-ghost-light' ),
	),
	array(
		'img'      => $uri . '/assets/images/hero-2.jpg',
		'eyebrow'  => 'Strategy that executes',
		'title'    => 'Smarter Structures. Sharper Strategy.',
		'text'     => 'We partner with businesses across industries and borders to design smarter structures, sharpen strategy, and build operational systems that scale.',
		'cta1'     => array( 'How We Work', home_url( '/about/' ), 'mm-btn mm-btn-gold' ),
		'cta2'     => array( 'Our Services', home_url( '/services/' ), 'mm-btn mm-btn-ghost-light' ),
	),
	array(
		'img'      => $uri . '/assets/images/hero-3.jpg',
		'eyebrow'  => 'From ambition to results',
		'title'    => 'Turning Ambition Into Measurable Results.',
		'text'     => 'From startups seeking direction to established enterprises pursuing transformation, we deliver the expertise, discipline, and insight needed to turn ambition into measurable results.',
		'cta1'     => array( 'Why Mastermind', home_url( '/about/' ), 'mm-btn mm-btn-gold' ),
		'cta2'     => array( 'Industries We Serve', home_url( '/industries/' ), 'mm-btn mm-btn-ghost-light' ),
	),
	array(
		'img'      => $uri . '/assets/images/hero-4.jpg',
		'eyebrow'  => 'Operations, supply and scale',
		'title'    => 'Operations That Scale With You.',
		'text'     => 'Operations audits, process re-engineering, SOP development, and supply of goods and services — built for sustainable growth in competitive markets.',
		'cta1'     => array( 'Operational Solutions', home_url( '/services/operational-solutions/' ), 'mm-btn mm-btn-gold' ),
		'cta2'     => array( 'Supply Services', home_url( '/services/supply-of-goods-and-services/' ), 'mm-btn mm-btn-ghost-light' ),
	),
);
?>

<section class="mm-slider" id="mmSlider" aria-label="<?php esc_attr_e( 'Highlights', 'mmbuss' ); ?>">
	<div class="mm-slides">
		<?php foreach ( $slides as $i => $s ) : ?>
		<div class="mm-slide<?php echo 0 === $i ? ' active' : ''; ?>">
			<div class="mm-slide-bg" style="background-image:url('<?php echo esc_url( $s['img'] ); ?>')"></div>
			<div class="mm-wrap mm-slide-content">
				<p class="mm-eyebrow"><?php echo esc_html( $s['eyebrow'] ); ?></p>
				<h1 class="mm-slide-title"><?php echo esc_html( $s['title'] ); ?></h1>
				<p class="mm-slide-text"><?php echo esc_html( $s['text'] ); ?></p>
				<p class="mm-slide-actions">
					<a class="<?php echo esc_attr( $s['cta1'][2] ); ?>" href="<?php echo esc_url( $s['cta1'][1] ); ?>"><?php echo esc_html( $s['cta1'][0] ); ?></a>
					<a class="<?php echo esc_attr( $s['cta2'][2] ); ?>" href="<?php echo esc_url( $s['cta2'][1] ); ?>"><?php echo esc_html( $s['cta2'][0] ); ?></a>
				</p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<div class="mm-slider-dots" role="tablist" aria-label="<?php esc_attr_e( 'Slides', 'mmbuss' ); ?>"></div>
	<div class="mm-slider-nav">
		<button class="mm-slider-arrow" data-slide="prev" aria-label="<?php esc_attr_e( 'Previous slide', 'mmbuss' ); ?>">&#8592;</button>
		<button class="mm-slider-arrow" data-slide="next" aria-label="<?php esc_attr_e( 'Next slide', 'mmbuss' ); ?>">&#8594;</button>
	</div>
</section>

<div class="mm-stats">
	<div class="mm-wrap mm-stats-inner">
		<div class="mm-stat"><span class="mm-stat-num" data-count="4">4</span><span class="mm-stat-label"><?php esc_html_e( 'Core Service Pillars', 'mmbuss' ); ?></span></div>
		<div class="mm-stat"><span class="mm-stat-num" data-count="6">6</span><span class="mm-stat-label"><?php esc_html_e( 'Industries Served', 'mmbuss' ); ?></span></div>
		<div class="mm-stat"><span class="mm-stat-num" data-count="4">4</span><span class="mm-stat-label"><?php esc_html_e( 'Step Proven Approach', 'mmbuss' ); ?></span></div>
		<div class="mm-stat"><span class="mm-stat-num" data-count="100" data-suffix="%">100%</span><span class="mm-stat-label"><?php esc_html_e( 'Commitment to Results', 'mmbuss' ); ?></span></div>
	</div>
</div>

<section class="mm-section">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'Our Services', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( 'Everything your organization needs to operate, compete, and grow', 'mmbuss' ); ?></h2>
			</div>
			<a class="mm-btn mm-btn-outline" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'All Services', 'mmbuss' ); ?></a>
		</div>
		<div class="mm-grid-4">
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-2.jpg' ); ?>" alt="<?php esc_attr_e( 'Business management advisory session', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<span class="mm-card-num">/ 01</span>
					<h3><?php esc_html_e( 'Business Management', 'mmbuss' ); ?></h3>
					<p><?php esc_html_e( 'Structuring, governance, and performance systems that professionalize how you run.', 'mmbuss' ); ?></p>
					<a class="mm-card-link" href="<?php echo esc_url( home_url( '/services/business-management/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?></a>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/about-section.jpg' ); ?>" alt="<?php esc_attr_e( 'Consulting strategy review', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<span class="mm-card-num">/ 02</span>
					<h3><?php esc_html_e( 'Consulting', 'mmbuss' ); ?></h3>
					<p><?php esc_html_e( 'Growth planning, market entry, feasibility, and executive-level advisory.', 'mmbuss' ); ?></p>
					<a class="mm-card-link" href="<?php echo esc_url( home_url( '/services/consulting/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?></a>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/services-banner.jpg' ); ?>" alt="<?php esc_attr_e( 'Operations and process analysis', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<span class="mm-card-num">/ 03</span>
					<h3><?php esc_html_e( 'Operational Solutions', 'mmbuss' ); ?></h3>
					<p><?php esc_html_e( 'Audits, re-engineering, SOPs, and automation guidance that cut waste.', 'mmbuss' ); ?></p>
					<a class="mm-card-link" href="<?php echo esc_url( home_url( '/services/operational-solutions/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?></a>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-4.jpg' ); ?>" alt="<?php esc_attr_e( 'Supply chain and logistics', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body">
					<span class="mm-card-num">/ 04</span>
					<h3><?php esc_html_e( 'Supply of Goods and Services', 'mmbuss' ); ?></h3>
					<p><?php esc_html_e( 'Sourcing, procurement, fulfillment, and trade logistics you can rely on.', 'mmbuss' ); ?></p>
					<a class="mm-card-link" href="<?php echo esc_url( home_url( '/services/supply-of-goods-and-services/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?></a>
				</div>
			</article>
		</div>
	</div>
</section>

<div class="mm-marquee" aria-hidden="true">
	<div class="mm-marquee-track">
		<span>STRUCTURED STRATEGY <span class="mm-gold-text">•</span> SUSTAINABLE GROWTH <span class="mm-gold-text">•</span> STRUCTURED STRATEGY <span class="mm-gold-text">•</span> SUSTAINABLE GROWTH <span class="mm-gold-text">•</span>&nbsp;</span>
		<span>STRUCTURED STRATEGY <span class="mm-gold-text">•</span> SUSTAINABLE GROWTH <span class="mm-gold-text">•</span> STRUCTURED STRATEGY <span class="mm-gold-text">•</span> SUSTAINABLE GROWTH <span class="mm-gold-text">•</span>&nbsp;</span>
	</div>
</div>

<section class="mm-section mm-section-soft">
	<div class="mm-wrap mm-split">
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/about-section.jpg' ); ?>" alt="<?php esc_attr_e( 'Mastermind consultants reviewing strategy', 'mmbuss' ); ?>" loading="lazy">
			<div class="mm-badge"><strong>USA</strong><span><?php esc_html_e( 'Global perspective, local precision', 'mmbuss' ); ?></span></div>
		</div>
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Who We Are', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'A partner, not just an advisor', 'mmbuss' ); ?></h2>
			<p><?php esc_html_e( 'Mastermind Business Systems LLC is an international business management and consulting firm built on one core belief: every organization has untapped potential waiting to be structured, streamlined, and scaled.', 'mmbuss' ); ?></p>
			<ul class="mm-checks">
				<li><?php esc_html_e( 'Global Perspective, Local Precision', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Results-Driven Methodology', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Cross-Industry Expertise', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Partnership, Not Just Advisory', 'mmbuss' ); ?></li>
			</ul>
			<a class="mm-btn" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'More About Us', 'mmbuss' ); ?></a>
		</div>
	</div>
</section>

<section class="mm-section mm-section-navy">
	<div class="mm-wrap">
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Our Approach', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'From diagnosis to sustained results in four steps', 'mmbuss' ); ?></h2>
			<p class="mm-section-lead"><?php esc_html_e( 'A proven operating rhythm — so you always know what we are doing, why, and what it returned.', 'mmbuss' ); ?></p>
		</div>
		<div class="mm-steps">
			<div class="mm-step reveal"><span class="mm-step-num">01</span><h3><?php esc_html_e( 'Diagnose', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We assess your current operations, structure, and strategy to identify gaps and opportunities.', 'mmbuss' ); ?></p></div>
			<div class="mm-step reveal"><span class="mm-step-num">02</span><h3><?php esc_html_e( 'Design', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We build tailored frameworks, systems, and strategic roadmaps aligned with your objectives.', 'mmbuss' ); ?></p></div>
			<div class="mm-step reveal"><span class="mm-step-num">03</span><h3><?php esc_html_e( 'Deploy', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We support implementation, ensuring solutions are adopted, not just delivered.', 'mmbuss' ); ?></p></div>
			<div class="mm-step reveal"><span class="mm-step-num">04</span><h3><?php esc_html_e( 'Sustain', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We provide ongoing oversight and advisory support to ensure long-term results.', 'mmbuss' ); ?></p></div>
		</div>
	</div>
</section>

<section class="mm-section">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'Industries We Serve', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( 'Cross-industry expertise, applied precisely', 'mmbuss' ); ?></h2>
			</div>
			<a class="mm-btn mm-btn-outline" href="<?php echo esc_url( home_url( '/industries/' ) ); ?>"><?php esc_html_e( 'All Industries', 'mmbuss' ); ?></a>
		</div>
		<div class="mm-grid-3">
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-2.jpg' ); ?>" alt="<?php esc_attr_e( 'Startup team collaborating', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body"><h3><?php esc_html_e( 'Startups and Emerging Enterprises', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Direction, structure, and strategy for ventures finding their footing.', 'mmbuss' ); ?></p></div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-1.jpg' ); ?>" alt="<?php esc_attr_e( 'Corporate headquarters', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body"><h3><?php esc_html_e( 'Corporate and Institutional Clients', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Governance and performance systems for established organizations.', 'mmbuss' ); ?></p></div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-4.jpg' ); ?>" alt="<?php esc_attr_e( 'Logistics and supply chain operations', 'mmbuss' ); ?>" loading="lazy"></div>
				<div class="mm-card-body"><h3><?php esc_html_e( 'Trade, Logistics, and Supply Chain Businesses', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Optimization across sourcing, movement, and fulfillment.', 'mmbuss' ); ?></p></div>
			</article>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
