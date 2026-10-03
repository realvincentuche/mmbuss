<?php
/**
 * Homepage — light agency system, 4-slide hero.
 * Body copy is exact client text; headlines/summaries generated.
 *
 * @package MMBuss
 */

get_header();

$uri = get_template_directory_uri();
$slides = array(
	array(
		'title' => 'Better <span class="mm-outline">Business.</span><br><span class="hl">Built to Grow.</span>',
		'text'  => 'Mastermind Business Systems LLC is a global business management and consulting firm dedicated to transforming how organizations operate, compete, and grow.',
		'img'   => $uri . '/assets/images/home-slide-business-district.jpg',
		'cta1'  => array( 'Start a Conversation', home_url( '/contact/' ), 'mm-btn mm-btn-gold' ),
		'cta2'  => array( 'Explore Services', home_url( '/services/' ), 'mm-btn mm-btn-outline' ),
	),
	array(
		'title' => 'Smart <span class="mm-outline">Systems.</span><br>Clear <span class="hl">Strategy.</span>',
		'text'  => 'We partner with businesses across industries and borders to design smarter structures, sharpen strategy, and build operational systems that scale.',
		'img'   => $uri . '/assets/images/home-slide-strategy-team.jpg',
		'cta1'  => array( 'How We Work', home_url( '/about/' ), 'mm-btn mm-btn-gold' ),
		'cta2'  => array( 'Our Services', home_url( '/services/' ), 'mm-btn mm-btn-outline' ),
	),
	array(
		'badge' => 'From ambition to results',
		'title' => 'Clear <span class="mm-outline">Plans.</span><br><span class="hl">Lasting Results.</span>',
		'text'  => 'From startups seeking direction to established enterprises pursuing transformation, we deliver the expertise, discipline, and insight needed to turn ambition into measurable results.',
		'img'   => $uri . '/assets/images/home-slide-partnership.jpg',
		'cta1'  => array( 'Why Mastermind', home_url( '/about/' ), 'mm-btn mm-btn-gold' ),
		'cta2'  => array( 'Industries We Serve', home_url( '/industries/' ), 'mm-btn mm-btn-outline' ),
	),
	array(
		'title' => 'Operations That <span class="mm-outline">Scale</span> <span class="hl">With You.</span>',
		'text'  => 'Operations audits, process re-engineering, SOP development, and supply of goods and services — built for sustainable growth in competitive markets.',
		'img'   => $uri . '/assets/images/home-slide-logistics.jpg',
		'cta1'  => array( 'Operational Solutions', home_url( '/services/operational-solutions/' ), 'mm-btn mm-btn-gold' ),
		'cta2'  => array( 'Supply Services', home_url( '/services/supply-of-goods-and-services/' ), 'mm-btn mm-btn-outline' ),
	),
);
?>

<section class="mm-hero" id="mmSlider" role="region" aria-roledescription="carousel" aria-label="<?php esc_attr_e( 'Highlights', 'mmbuss' ); ?>">
	<div class="mm-slides">
		<?php foreach ( $slides as $i => $s ) : ?>
		<div class="mm-slide<?php echo 0 === $i ? ' active' : ''; ?>" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr( sprintf( __( '%1$d of %2$d', 'mmbuss' ), $i + 1, count( $slides ) ) ); ?>" aria-hidden="<?php echo 0 === $i ? 'false' : 'true'; ?>"<?php echo 0 === $i ? '' : ' inert'; ?> style="background-image:url('<?php echo esc_url( $s['img'] ); ?>')">
			<div class="mm-wrap mm-slide-content">
				<h2 class="mm-slide-title"><?php echo wp_kses( $s['title'], array( 'br' => array(), 'span' => array( 'class' => array() ) ) ); ?></h2>
				<p class="mm-slide-text"><?php echo esc_html( $s['text'] ); ?></p>
				<p class="mm-slide-actions">
					<a class="<?php echo esc_attr( $s['cta1'][2] ); ?>" href="<?php echo esc_url( $s['cta1'][1] ); ?>"><?php echo esc_html( $s['cta1'][0] ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
					<a class="<?php echo esc_attr( $s['cta2'][2] ); ?>" href="<?php echo esc_url( $s['cta2'][1] ); ?>"><?php echo esc_html( $s['cta2'][0] ); ?></a>
				</p>
			</div>
		</div>
		<?php endforeach; ?>
	<div class="mm-slider-controls">
		<div class="mm-slider-dots" role="group" aria-label="<?php esc_attr_e( 'Choose a slide', 'mmbuss' ); ?>"></div>
	</div>
	</div>

	
</section>

<section class="mm-section-tight">
	<div class="mm-wrap mm-split">
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/about-section.jpg' ); ?>" alt="<?php esc_attr_e( 'Mastermind consultants at work', 'mmbuss' ); ?>" loading="lazy">
			<div class="mm-badge"><span class="mm-stars" aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span><small><?php esc_html_e( 'Practical solutions. Measurable impact. Unwavering integrity.', 'mmbuss' ); ?></small></div>
		</div>
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Who We Are', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'A partner, not just', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'an advisor', 'mmbuss' ); ?></span></h2>
			<p><?php esc_html_e( 'Mastermind Business Systems LLC is an international business management and consulting firm built on one core belief: every organization has untapped potential waiting to be structured, streamlined, and scaled.', 'mmbuss' ); ?></p>
			<ul class="mm-checks">
				<li><?php esc_html_e( 'Global Perspective, Local Precision', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Results-Driven Methodology', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Cross-Industry Expertise', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Partnership, Not Just Advisory', 'mmbuss' ); ?></li>
			</ul>
			<div class="mm-split-numbers">
				<div><strong><span data-count="4">4</span></strong><span><?php esc_html_e( 'Service pillars', 'mmbuss' ); ?></span></div>
				<div><strong><span data-count="6">6</span></strong><span><?php esc_html_e( 'Industries served', 'mmbuss' ); ?></span></div>
				<div><strong><span data-count="4">4</span></strong><span><?php esc_html_e( 'Step proven approach', 'mmbuss' ); ?></span></div>
			</div>
			<a class="mm-btn" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'More About Us', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>
</section>

	<div class="mm-wrap">
		<div class="mm-hero-foot">
			<div class="mm-hero-stats">
				<div class="mm-hero-stat"><strong><span data-count="4">4</span></strong><span><?php esc_html_e( 'Core service pillars', 'mmbuss' ); ?></span></div>
				<div class="mm-hero-stat"><strong><span data-count="6">6</span></strong><span><?php esc_html_e( 'Industries served', 'mmbuss' ); ?></span></div>
				<div class="mm-hero-stat"><strong><span data-count="4">4</span></strong><span><?php esc_html_e( 'Step proven approach', 'mmbuss' ); ?></span></div>
			</div>
		</div>

		<div class="mm-hero-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/about-banner.jpg' ); ?>" alt="<?php esc_attr_e( 'Mastermind team at work', 'mmbuss' ); ?>" loading="lazy">
			<p class="mm-hero-media-tag"><?php esc_html_e( 'Trusted by organizations across', 'mmbuss' ); ?> <b><?php esc_html_e( '6 industries', 'mmbuss' ); ?></b></p>
		</div>
	</div>

<section class="mm-logos">
	<div class="mm-wrap">
		<p class="mm-logos-label"><?php esc_html_e( 'Built for the realities of', 'mmbuss' ); ?></p>
		<div class="mm-logos-marquee" aria-label="Industries served">
			<div class="mm-logos-track">
				<div class="mm-logos-row">
					<span>Startups <i aria-hidden="true">&#10022;</i></span>
					<span>Corporate <i aria-hidden="true">&#10022;</i></span>
					<span>Logistics <i aria-hidden="true">&#10022;</i></span>
					<span>Real Estate <i aria-hidden="true">&#10022;</i></span>
					<span>Finance <i aria-hidden="true">&#10022;</i></span>
					<span>Nonprofit <i aria-hidden="true">&#10022;</i></span>
				</div>
				<div class="mm-logos-row" aria-hidden="true">
					<span>Startups <i>&#10022;</i></span>
					<span>Corporate <i>&#10022;</i></span>
					<span>Logistics <i>&#10022;</i></span>
					<span>Real Estate <i>&#10022;</i></span>
					<span>Finance <i>&#10022;</i></span>
					<span>Nonprofit <i>&#10022;</i></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mm-section">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'Our Services', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( 'Everything your organization needs to', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'operate and grow', 'mmbuss' ); ?></span></h2>
			</div>
			<div class="mm-head-side">
				<p class="mm-section-lead"><?php esc_html_e( 'Four disciplines, one accountable partner. Every engagement is built around outcomes you can measure.', 'mmbuss' ); ?></p>
				<a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'All Services', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="mm-grid-4">
			<article class="mm-svc reveal">
				<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true">&#9783;</span><span class="mm-svc-num">/ 01</span></div>
				<h3><?php esc_html_e( 'Business Management', 'mmbuss' ); ?></h3>
				<p><?php esc_html_e( 'Structuring, governance, and performance systems that professionalize how you run.', 'mmbuss' ); ?></p>
				<div class="mm-tags"><span><?php esc_html_e( 'Governance', 'mmbuss' ); ?></span><span><?php esc_html_e( 'Performance', 'mmbuss' ); ?></span><span><?php esc_html_e( 'Leadership', 'mmbuss' ); ?></span></div>
				<a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/business-management/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</article>
			<article class="mm-svc reveal">
				<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true">&#9673;</span><span class="mm-svc-num">/ 02</span></div>
				<h3><?php esc_html_e( 'Consulting', 'mmbuss' ); ?></h3>
				<p><?php esc_html_e( 'Growth planning, market entry, feasibility, and executive-level advisory.', 'mmbuss' ); ?></p>
				<div class="mm-tags"><span><?php esc_html_e( 'Strategy', 'mmbuss' ); ?></span><span><?php esc_html_e( 'Expansion', 'mmbuss' ); ?></span><span><?php esc_html_e( 'Advisory', 'mmbuss' ); ?></span></div>
				<a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/consulting/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</article>
			<article class="mm-svc reveal">
				<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true">&#9881;</span><span class="mm-svc-num">/ 03</span></div>
				<h3><?php esc_html_e( 'Operational Solutions', 'mmbuss' ); ?></h3>
				<p><?php esc_html_e( 'Audits, re-engineering, SOPs, and automation guidance that cut waste.', 'mmbuss' ); ?></p>
				<div class="mm-tags"><span><?php esc_html_e( 'SOPs', 'mmbuss' ); ?></span><span><?php esc_html_e( 'Automation', 'mmbuss' ); ?></span><span><?php esc_html_e( 'Efficiency', 'mmbuss' ); ?></span></div>
				<a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/operational-solutions/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</article>
			<article class="mm-svc reveal">
				<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true">&#9746;</span><span class="mm-svc-num">/ 04</span></div>
				<h3><?php esc_html_e( 'Supply of Goods and Services', 'mmbuss' ); ?></h3>
				<p><?php esc_html_e( 'Sourcing, procurement, fulfillment, and trade logistics you can rely on.', 'mmbuss' ); ?></p>
				<div class="mm-tags"><span><?php esc_html_e( 'Sourcing', 'mmbuss' ); ?></span><span><?php esc_html_e( 'Fulfillment', 'mmbuss' ); ?></span><span><?php esc_html_e( 'Trade', 'mmbuss' ); ?></span></div>
				<a class="mm-text-link" href="<?php echo esc_url( home_url( '/services/supply-of-goods-and-services/' ) ); ?>"><?php esc_html_e( 'Learn More', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</article>
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

<section class="mm-section">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'Industries', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( 'Cross-industry expertise, applied', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'precisely', 'mmbuss' ); ?></span></h2>
			</div>
			<div class="mm-head-side">
				<p class="mm-section-lead"><?php esc_html_e( 'Fresh perspective and proven frameworks for every engagement.', 'mmbuss' ); ?></p>
				<a class="mm-text-link" href="<?php echo esc_url( home_url( '/industries/' ) ); ?>"><?php esc_html_e( 'All Industries', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="mm-grid-3">
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-2.jpg' ); ?>" alt="<?php esc_attr_e( 'Startup team collaborating', 'mmbuss' ); ?>" loading="lazy"><span class="mm-card-badge"><?php esc_html_e( 'Startups', 'mmbuss' ); ?></span></div>
				<div class="mm-card-body"><p class="mm-card-meta"><?php esc_html_e( 'Emerging Enterprises', 'mmbuss' ); ?></p><h3><?php esc_html_e( 'Startups and Emerging Enterprises', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Direction, structure, and strategy for ventures finding their footing.', 'mmbuss' ); ?></p></div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-1.jpg' ); ?>" alt="<?php esc_attr_e( 'Corporate headquarters', 'mmbuss' ); ?>" loading="lazy"><span class="mm-card-badge"><?php esc_html_e( 'Corporate', 'mmbuss' ); ?></span></div>
				<div class="mm-card-body"><p class="mm-card-meta"><?php esc_html_e( 'Institutions', 'mmbuss' ); ?></p><h3><?php esc_html_e( 'Corporate and Institutional Clients', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Governance and performance systems for established organizations.', 'mmbuss' ); ?></p></div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-media"><img src="<?php echo esc_url( $uri . '/assets/images/hero-4.jpg' ); ?>" alt="<?php esc_attr_e( 'Logistics operations', 'mmbuss' ); ?>" loading="lazy"><span class="mm-card-badge"><?php esc_html_e( 'Logistics', 'mmbuss' ); ?></span></div>
				<div class="mm-card-body"><p class="mm-card-meta"><?php esc_html_e( 'Trade & Supply Chain', 'mmbuss' ); ?></p><h3><?php esc_html_e( 'Trade, Logistics, and Supply Chain', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Optimization across sourcing, movement, and fulfillment.', 'mmbuss' ); ?></p></div>
			</article>
		</div>
	</div>
</section>

<section class="mm-section-tight">
	<div class="mm-panel-dark">
		<div class="reveal">
			<p class="mm-kicker mm-kicker-dark"><?php esc_html_e( 'Our Approach', 'mmbuss' ); ?></p>
			<div class="mm-section-head-split">
				<h2 class="mm-section-title" style="color:#fff;"><?php esc_html_e( 'From diagnosis to sustained results in four steps', 'mmbuss' ); ?></h2>
				<p class="mm-section-lead mm-head-side" style="color:#b9c2d1;"><?php esc_html_e( 'A proven operating rhythm — so you always know what we are doing, why, and what it returned.', 'mmbuss' ); ?></p>
			</div>
		</div>
		<div class="mm-steps">
			<div class="mm-step reveal"><div class="mm-step-top"><span class="mm-step-num">01</span><span class="mm-step-goto" aria-hidden="true">&#8599;</span></div><h3><?php esc_html_e( 'Diagnose', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We assess your current operations, structure, and strategy to identify gaps and opportunities.', 'mmbuss' ); ?></p></div>
			<div class="mm-step reveal"><div class="mm-step-top"><span class="mm-step-num">02</span><span class="mm-step-goto" aria-hidden="true">&#8599;</span></div><h3><?php esc_html_e( 'Design', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We build tailored frameworks, systems, and strategic roadmaps aligned with your objectives.', 'mmbuss' ); ?></p></div>
			<div class="mm-step reveal"><div class="mm-step-top"><span class="mm-step-num">03</span><span class="mm-step-goto" aria-hidden="true">&#8599;</span></div><h3><?php esc_html_e( 'Deploy', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We support implementation, ensuring solutions are adopted, not just delivered.', 'mmbuss' ); ?></p></div>
			<div class="mm-step reveal"><div class="mm-step-top"><span class="mm-step-num">04</span><span class="mm-step-goto" aria-hidden="true">&#8599;</span></div><h3><?php esc_html_e( 'Sustain', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We provide ongoing oversight and advisory support to ensure long-term results.', 'mmbuss' ); ?></p></div>
		</div>
	</div>
</section>

<section class="mm-section">
	<div class="mm-wrap mm-split">
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Why Mastermind', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'Built for organizations that outgrow', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'average', 'mmbuss' ); ?></span></h2>
			<p class="mm-section-lead"><?php esc_html_e( 'We measure our success by your outcomes — stronger operations, clearer strategy, and sustainable growth.', 'mmbuss' ); ?></p>
			<div class="mm-apart-list">
				<div class="mm-apart-row"><span class="mm-apart-icon" aria-hidden="true">&#9678;</span><div><h3><?php esc_html_e( 'Global Perspective, Local Precision', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Our approach blends international best practices with a sharp understanding of local market realities.', 'mmbuss' ); ?></p></div></div>
				<div class="mm-apart-row"><span class="mm-apart-icon" aria-hidden="true">&#9096;</span><div><h3><?php esc_html_e( 'Results-Driven Methodology', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We measure our success by your outcomes: stronger operations, clearer strategy, and sustainable growth.', 'mmbuss' ); ?></p></div></div>
				<div class="mm-apart-row"><span class="mm-apart-icon" aria-hidden="true">&#9783;</span><div><h3><?php esc_html_e( 'Cross-Industry Expertise', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Our team brings experience across diverse sectors, allowing us to bring fresh perspective and proven frameworks to every engagement.', 'mmbuss' ); ?></p></div></div>
				<div class="mm-apart-row"><span class="mm-apart-icon" aria-hidden="true">&#10022;</span><div><h3><?php esc_html_e( 'Partnership, Not Just Advisory', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We stay engaged beyond the recommendation stage, supporting execution and long-term sustainability.', 'mmbuss' ); ?></p></div></div>
			</div>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/why-us.jpg' ); ?>" alt="<?php esc_attr_e( 'Mastermind partner meeting', 'mmbuss' ); ?>" loading="lazy">
			<div class="mm-badge"><span class="mm-stars" aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span><small><?php esc_html_e( 'Structured Strategy. Sustainable Growth.', 'mmbuss' ); ?></small></div>
		</div>
	</div>
</section>

<section class="mm-section-tight">
	<div class="mm-wrap mm-faq-grid">
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'FAQ', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'Questions before', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'we start', 'mmbuss' ); ?></span></h2>
			<p class="mm-section-lead"><?php esc_html_e( 'The things every executive asks us on the first call — answered upfront, no sales fluff.', 'mmbuss' ); ?></p>
			<div class="mm-faq-side-card">
				<span class="mm-faq-side-icon" aria-hidden="true">&#10078;</span>
				<div>
					<p><?php esc_html_e( 'Still not sure? Ask us directly', 'mmbuss' ); ?></p>
					<a href="mailto:<?php echo esc_attr( mmbuss_contact( 'email' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'email' ) ); ?></a>
				</div>
			</div>
		</div>
		<div class="reveal">
			<div class="mm-faq-item open">
				<button class="mm-faq-q"><?php esc_html_e( 'What does an engagement with Mastermind look like?', 'mmbuss' ); ?><span class="mm-faq-icon" aria-hidden="true">+</span></button>
				<div class="mm-faq-a"><p><?php esc_html_e( 'We start by diagnosing your operations, structure, and strategy — then design tailored frameworks, support deployment, and sustain results with ongoing oversight.', 'mmbuss' ); ?></p></div>
			</div>
			<div class="mm-faq-item">
				<button class="mm-faq-q"><?php esc_html_e( 'Do you work with startups or only established companies?', 'mmbuss' ); ?><span class="mm-faq-icon" aria-hidden="true">+</span></button>
				<div class="mm-faq-a"><p><?php esc_html_e( 'Both. From startups seeking direction to established enterprises pursuing transformation, we tailor every engagement to where you are and where you are headed.', 'mmbuss' ); ?></p></div>
			</div>
			<div class="mm-faq-item">
				<button class="mm-faq-q"><?php esc_html_e( 'Can you supply goods as well as advisory services?', 'mmbuss' ); ?><span class="mm-faq-icon" aria-hidden="true">+</span></button>
				<div class="mm-faq-a"><p><?php esc_html_e( 'Yes. We procure and source goods, materials, and equipment — and supply and distribute to corporate, government, and institutional clients, including import/export facilitation.', 'mmbuss' ); ?></p></div>
			</div>
			<div class="mm-faq-item">
				<button class="mm-faq-q"><?php esc_html_e( 'How do we start?', 'mmbuss' ); ?><span class="mm-faq-icon" aria-hidden="true">+</span></button>
				<div class="mm-faq-a"><p><?php esc_html_e( 'Send a message through the contact page or email info@mmbuss.com with your company name, industry, and the challenge you want solved. We respond to every serious enquiry.', 'mmbuss' ); ?></p></div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
