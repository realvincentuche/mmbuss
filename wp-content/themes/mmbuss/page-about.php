<?php
/**
 * About Us page — exact client copy from company profile.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'About Us',
		'sub'   => 'Every organization has untapped potential waiting to be structured, streamlined, and scaled.',
		'img'   => $uri . '/assets/images/about-banner.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap mm-split">
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Who We Are', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'International expertise,', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'practical solutions', 'mmbuss' ); ?></span></h2>
			<p class="mm-section-lead"><?php esc_html_e( 'Mastermind Business Systems LLC is an international business management and consulting firm built on one core belief: every organization has untapped potential waiting to be structured, streamlined, and scaled.', 'mmbuss' ); ?></p>
			<p><?php esc_html_e( 'We work at the intersection of strategy and execution — helping business owners, executives, and institutions solve complex operational challenges, professionalize their management systems, and position themselves for sustainable growth in competitive markets.', 'mmbuss' ); ?></p>
			<p><a class="mm-btn mm-btn-gold" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore Our Services', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a></p>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/about-section.jpg' ); ?>" alt="<?php esc_attr_e( 'Mastermind strategy session', 'mmbuss' ); ?>" loading="lazy">
		</div>
	</div>
</section>

<section class="mm-section-tight">
	<div class="mm-wrap">
		<div class="mm-grid-2">
			<article class="mm-card reveal">
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-compass"></i></span><span class="mm-svc-num"><?php esc_html_e( 'MISSION', 'mmbuss' ); ?></span></div>
					<h3><?php esc_html_e( 'Strategic clarity for global competition', 'mmbuss' ); ?></h3>
					<p><?php esc_html_e( 'To equip businesses with the strategic clarity, operational frameworks, and management expertise required to compete confidently on a global scale.', 'mmbuss' ); ?></p>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-eye"></i></span><span class="mm-svc-num"><?php esc_html_e( 'VISION', 'mmbuss' ); ?></span></div>
					<h3><?php esc_html_e( 'A trusted global name', 'mmbuss' ); ?></h3>
					<p><?php esc_html_e( 'To be a trusted global name in business management and consulting — recognized for practical solutions, measurable impact, and unwavering integrity.', 'mmbuss' ); ?></p>
				</div>
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

<section class="mm-section-tight">
	<div class="mm-panel-dark">
		<div class="reveal">
			<p class="mm-kicker mm-kicker-dark"><?php esc_html_e( 'Our Approach', 'mmbuss' ); ?></p>
			<div class="mm-section-head-split">
				<h2 class="mm-section-title" style="color:#fff;"><?php esc_html_e( 'Diagnose. Design. Deploy. Sustain.', 'mmbuss' ); ?></h2>
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
				<div class="mm-apart-row"><span class="mm-apart-icon" aria-hidden="true"><i class="ph ph-globe"></i></span><div><h3><?php esc_html_e( 'Global Perspective, Local Precision', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Our approach blends international best practices with a sharp understanding of local market realities.', 'mmbuss' ); ?></p></div></div>
				<div class="mm-apart-row"><span class="mm-apart-icon" aria-hidden="true"><i class="ph ph-compass"></i></span><div><h3><?php esc_html_e( 'Results-Driven Methodology', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We measure our success by your outcomes: stronger operations, clearer strategy, and sustainable growth.', 'mmbuss' ); ?></p></div></div>
				<div class="mm-apart-row"><span class="mm-apart-icon" aria-hidden="true"><i class="ph ph-lightbulb"></i></span><div><h3><?php esc_html_e( 'Cross-Industry Expertise', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'Our team brings experience across diverse sectors, allowing us to bring fresh perspective and proven frameworks to every engagement.', 'mmbuss' ); ?></p></div></div>
				<div class="mm-apart-row"><span class="mm-apart-icon" aria-hidden="true"><i class="ph ph-handshake"></i></span><div><h3><?php esc_html_e( 'Partnership, Not Just Advisory', 'mmbuss' ); ?></h3><p><?php esc_html_e( 'We stay engaged beyond the recommendation stage, supporting execution and long-term sustainability.', 'mmbuss' ); ?></p></div></div>
			</div>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/why-us.jpg' ); ?>" alt="<?php esc_attr_e( 'Mastermind partner meeting', 'mmbuss' ); ?>" loading="lazy">
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
