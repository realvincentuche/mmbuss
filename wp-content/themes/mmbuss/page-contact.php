<?php
/**
 * Contact Us — exact client copy. Form area renders the live CF7 shortcode
 * via the dynamic section when one is pasted in wp-admin.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Contact Us',
		'sub'   => "Tell us where you are headed — we will bring the structure to get you there.",
		'img'   => $uri . '/assets/images/contact-banner.jpg',
		'pos'   => 'center 28%',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap">
		<div class="mm-section-head-split reveal">
			<div>
				<p class="mm-kicker"><?php esc_html_e( 'Contact', 'mmbuss' ); ?></p>
				<h2 class="mm-section-title"><?php esc_html_e( "Let's start the", 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'conversation', 'mmbuss' ); ?></span></h2>
			</div>
			<div class="mm-head-side">
				<p class="mm-section-lead"><?php esc_html_e( 'Call, email, or send a message — we respond to every serious enquiry.', 'mmbuss' ); ?></p>
			</div>
		</div>
		<div class="mm-contact-grid">
		<div class="mm-contact-card reveal">
			<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-paper-plane"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Reach Us', 'mmbuss' ); ?></span></div>
			<h3><?php esc_html_e( 'Get in Touch', 'mmbuss' ); ?></h3>
			<p><?php esc_html_e( "Whether you're launching a new venture, restructuring an existing one, or scaling into new markets — start the conversation.", 'mmbuss' ); ?></p>
			<ul class="mm-contact-rows">
				<li><i class="ph ph-envelope" aria-hidden="true"></i><div><strong><?php esc_html_e( 'Email', 'mmbuss' ); ?></strong><a href="mailto:<?php echo esc_attr( mmbuss_contact( 'email' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'email' ) ); ?></a></div></li>
				<li><i class="ph ph-phone" aria-hidden="true"></i><div><strong><?php esc_html_e( 'Phone', 'mmbuss' ); ?></strong><a href="<?php echo esc_attr( mmbuss_contact( 'phone_href' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'phone' ) ); ?></a></div></li>
				<li><i class="ph ph-headset" aria-hidden="true"></i><div><strong><?php esc_html_e( 'Toll Free', 'mmbuss' ); ?></strong><?php echo esc_html( mmbuss_contact( 'tollfree' ) ); ?></div></li>
				<li><i class="ph ph-globe" aria-hidden="true"></i><div><strong><?php esc_html_e( 'Web', 'mmbuss' ); ?></strong><a href="<?php echo esc_url( 'https://' . mmbuss_contact( 'web' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'web' ) ); ?></a></div></li>
				<li><i class="ph ph-map-pin" aria-hidden="true"></i><div><strong><?php esc_html_e( 'Office', 'mmbuss' ); ?></strong><?php echo esc_html( mmbuss_contact( 'office' ) ); ?></div></li>
			</ul>
		</div>
		<div class="mm-form-note reveal" id="mm-contact-form">
			<div class="mm-svc-top"><span class="mm-svc-icon" aria-hidden="true"><i class="ph ph-envelope"></i></span><span class="mm-svc-num"><?php esc_html_e( 'Write To Us', 'mmbuss' ); ?></span></div>
			<h3><?php esc_html_e( 'Send Us a Message', 'mmbuss' ); ?></h3>
			<p><?php esc_html_e( 'Share a few details about your organization and what you want to achieve. We respond to every serious enquiry — usually within one business day.', 'mmbuss' ); ?></p>
			<p><?php esc_html_e( 'Prefer email? Write directly to', 'mmbuss' ); ?> <a href="mailto:<?php echo esc_attr( mmbuss_contact( 'email' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'email' ) ); ?></a> <?php esc_html_e( 'and include your company name, industry, and the challenge you want solved.', 'mmbuss' ); ?></p>
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

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
