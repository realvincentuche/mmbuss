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
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap mm-contact-grid">
		<div class="mm-contact-card reveal">
			<h3><?php esc_html_e( 'Get in Touch', 'mmbuss' ); ?></h3>
			<p><?php esc_html_e( "Whether you're launching a new venture, restructuring an existing one, or scaling into new markets — start the conversation.", 'mmbuss' ); ?></p>
			<ul class="mm-contact-rows">
				<li><strong><?php esc_html_e( 'Email', 'mmbuss' ); ?></strong><a href="mailto:<?php echo esc_attr( mmbuss_contact( 'email' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'email' ) ); ?></a></li>
				<li><strong><?php esc_html_e( 'Phone', 'mmbuss' ); ?></strong><a href="<?php echo esc_attr( mmbuss_contact( 'phone_href' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'phone' ) ); ?></a></li>
				<li><strong><?php esc_html_e( 'Toll Free', 'mmbuss' ); ?></strong><?php echo esc_html( mmbuss_contact( 'tollfree' ) ); ?></li>
				<li><strong><?php esc_html_e( 'Web', 'mmbuss' ); ?></strong><?php echo esc_html( mmbuss_contact( 'web' ) ); ?></li>
				<li><strong><?php esc_html_e( 'Office', 'mmbuss' ); ?></strong><?php echo esc_html( mmbuss_contact( 'office' ) ); ?></li>
			</ul>
		</div>
		<div class="mm-form-note reveal">
			<h3><?php esc_html_e( 'Send Us a Message', 'mmbuss' ); ?></h3>
			<p><?php esc_html_e( 'Share a few details about your organization and what you want to achieve. We respond to every serious enquiry — usually within one business day.', 'mmbuss' ); ?></p>
			<p><?php esc_html_e( 'Prefer email? Write directly to info@mmbuss.com and include your company name, industry, and the challenge you want solved.', 'mmbuss' ); ?></p>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
