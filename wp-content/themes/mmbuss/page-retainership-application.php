<?php
/**
 * Retainership Application — Investor Solicitation Services.
 * Legal copy (scope, fee terms) is exact client text from the
 * retainership application form. The form itself renders the live CF7
 * shortcode pasted in wp-admin inside the white application card.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Retainership Application',
		'sub'   => 'Investor Solicitation Services: Retainership Application Form',
		'img'   => $uri . '/assets/images/industry-financial.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'Investor Solicitation Services', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( 'Retainership', 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'Application Form', 'mmbuss' ); ?></span></h2>
			</div>
			<div class="mm-head-side">
				<p class="mm-section-lead"><?php esc_html_e( 'Complete the application below — payment instructions will be provided by MMBS upon request.', 'mmbuss' ); ?></p>
			</div>
		</div>
		<div class="mm-grid-2">
			<article class="mm-card reveal">
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-briefcase"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Scope of Services', 'mmbuss' ); ?></span></div>
					<h3><?php esc_html_e( 'What MMBS will do for you', 'mmbuss' ); ?></h3>
					<p><?php esc_html_e( 'Mastermind Business Systems LLC ("MMBS") will assist the Applicant in soliciting prospective investors for the project described above, which may include:', 'mmbuss' ); ?></p>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'Review of the project and investor-readiness assessment', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Preparation or refinement of investor proposal materials', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Identification and outreach to prospective investors in Africa and other regions', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Coordination of introductions and follow-up communication', 'mmbuss' ); ?></li>
					</ul>
				</div>
			</article>
			<article class="mm-card reveal">
				<div class="mm-card-body">
					<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-shield-check"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Fee and Terms', 'mmbuss' ); ?></span></div>
					<h3><?php esc_html_e( 'Retainership fee and terms', 'mmbuss' ); ?></h3>
					<ul class="mm-card-list">
						<li><?php esc_html_e( 'The Applicant agrees to pay MMBS a retainership fee of US $5,000.00 upon submission of this form.', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'The retainership fee is NON-REFUNDABLE under all circumstances, including where no investor is secured, the project is withdrawn or delayed, or the Applicant terminates the engagement.', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'The retainership fee secures MMBS\'s time, resources and commitment to begin work on the Applicant\'s behalf. It is not a guarantee of funding.', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'MMBS does not guarantee that any investor will be found or that any investment will be made.', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'The Applicant confirms that all information provided is true, accurate and complete, and that the Applicant has the legal right to seek funding for the project.', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'Any success fee, commission or additional charges will be set out in a separate written agreement signed by both parties.', 'mmbuss' ); ?></li>
						<li><?php esc_html_e( 'All information shared will be treated as confidential by MMBS, except as needed to present the project to prospective investors with the Applicant\'s approval.', 'mmbuss' ); ?></li>
					</ul>
				</div>
			</article>
		</div>
	</div>
</section>

<section class="mm-section-tight">
	<div class="mm-wrap">
		<div class="mm-form-note reveal" id="mm-retainership-form">
			<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-pen"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Apply Now', 'mmbuss' ); ?></span></div>
			<h3><?php esc_html_e( 'Application Form', 'mmbuss' ); ?></h3>
			<p><?php esc_html_e( 'Fill in every section below. Typing your full name in the signature field counts as your electronic signature.', 'mmbuss' ); ?></p>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( '' !== trim( get_the_content() ) ) : ?>
					<?php the_content(); ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<p><?php esc_html_e( 'Payment instructions will be provided by MMBS upon request.', 'mmbuss' ); ?></p>
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

<?php
get_footer();
