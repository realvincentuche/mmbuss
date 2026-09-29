<?php
/**
 * Supply of Goods and Services detail — exact client copy.
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => 'Supply of Goods and Services',
		'sub'   => 'Procurement, distribution, fulfillment, and trade logistics for corporate, government, and institutional clients.',
		'img'   => $uri . '/assets/images/hero-4.jpg',
	)
);
?>

<section class="mm-section">
	<div class="mm-wrap mm-split">
		<div class="reveal">
			<p class="mm-kicker"><?php esc_html_e( 'Service / 04', 'mmbuss' ); ?></p>
			<h2 class="mm-section-title"><?php esc_html_e( 'Sourced, vetted, delivered', 'mmbuss' ); ?></h2>
			<ul class="mm-checks">
				<li><?php esc_html_e( 'Procurement and sourcing of goods, materials, and equipment', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Supply and distribution of goods to corporate, government, and institutional clients', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Vendor sourcing, vetting, and contract management', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Service delivery and fulfillment under supply agreements and contracts', 'mmbuss' ); ?></li>
				<li><?php esc_html_e( 'Import/export facilitation and trade logistics support', 'mmbuss' ); ?></li>
			</ul>
			<p><a class="mm-btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request This Service', 'mmbuss' ); ?></a></p>
		</div>
		<div class="mm-split-media reveal">
			<img src="<?php echo esc_url( $uri . '/assets/images/hero-4.jpg' ); ?>" alt="<?php esc_attr_e( 'Supply chain and logistics', 'mmbuss' ); ?>" loading="lazy">
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
