<?php
/**
 * Consulting service detail — exact client copy.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Consulting',
		'sub'   => 'Strategy, market entry, feasibility, and executive advisory for founders and leadership teams.',
		'img'   => $uri . '/assets/images/about-section.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap mm-split">
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Service / 02', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'Clarity before commitment', 'mmbuss' ); ?></h2>
			<ul class="mm-checks">
				<li><?php esc_html_e( 'Business strategy and growth planning', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Market entry and expansion advisory', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Feasibility studies and business case development', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Risk assessment and mitigation planning', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Corporate advisory for founders and executive teams', 'mmbuss' ); ?></li>
			</ul>
			<p><a class="mm-btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request This Service', 'mmbuss' ); ?></a></p>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/about-section.jpg' ); ?>" alt="<?php esc_attr_e( 'Consulting strategy review', 'mmbuss' ); ?>" loading="lazy">
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
