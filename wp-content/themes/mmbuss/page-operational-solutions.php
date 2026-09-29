<?php
/**
 * Operational Solutions service detail — exact client copy.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Operational Solutions',
		'sub'   => 'Audits, re-engineering, SOPs, and automation guidance that remove waste and unlock scale.',
		'img'   => $uri . '/assets/images/services-banner.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap mm-split">
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Service / 03', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'Operations engineered to scale', 'mmbuss' ); ?></h2>
			<ul class="mm-checks">
				<li><?php esc_html_e( 'Operations audits and process re-engineering', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Supply chain and logistics optimization', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Standard Operating Procedure (SOP) development', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Systems and workflow automation guidance', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Cost efficiency and resource optimization', 'mmbuss' ); ?></li>
			</ul>
			<p><a class="mm-btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request This Service', 'mmbuss' ); ?></a></p>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/services-banner.jpg' ); ?>" alt="<?php esc_attr_e( 'Operations analysis', 'mmbuss' ); ?>" loading="lazy">
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
