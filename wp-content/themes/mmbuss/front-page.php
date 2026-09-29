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
?>

<section class="mmbuss-hero">
	<div class="mmbuss-wrap mmbuss-hero-inner">
		<p class="mmbuss-eyebrow"><?php bloginfo( 'name' ); ?></p>
		<h1 class="mmbuss-hero-title"><?php esc_html_e( 'Coming Soon', 'mmbuss' ); ?></h1>
		<p class="mmbuss-hero-text"><?php esc_html_e( 'We are building something great. Check back shortly.', 'mmbuss' ); ?></p>
		<p class="mmbuss-hero-cta">
			<a class="mmbuss-btn" href="mailto:info@example.com"><?php esc_html_e( 'Contact Us', 'mmbuss' ); ?></a>
		</p>
	</div>
</section>

<?php get_template_part( 'template-parts/dynamic', 'content' ); ?>

<?php
get_footer();
