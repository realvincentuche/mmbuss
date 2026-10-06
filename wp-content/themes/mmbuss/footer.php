<?php
/**
 * Footer template.
 *
 * @package MMBuss
 */
?>

</main>

<section class="mm-section-tight">
	<div class="mm-cta-panel reveal">
		<div class="mm-cta-inner">
			<p class="mm-cta-kicker"><?php esc_html_e( 'Ready to grow?', 'mmbuss' ); ?></p>
			<h2 class="mm-cta-title"><?php esc_html_e( "Let's Build Something", 'mmbuss' ); ?> <span class="hl"><?php esc_html_e( 'Structured', 'mmbuss' ); ?></span></h2>
			<p class="mm-cta-text"><?php esc_html_e( "Whether you're launching a new venture, restructuring an existing one, or scaling into new markets, Mastermind Business Systems LLC brings the strategic insight and operational discipline to help you get there.", 'mmbuss' ); ?></p>
			<div class="mm-cta-actions">
				<a class="mm-btn mm-btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a Conversation', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
				<a class="mm-btn mm-btn-ghost-light" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore Services', 'mmbuss' ); ?> <i class="ph ph-arrow-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>

<footer class="mm-footer">
	<div class="mm-wrap mm-footer-grid">
		<div class="mm-footer-col">
			<a class="mm-brand mm-footer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/new-mastermind-logo-white.png' ); ?>" alt="<?php esc_attr_e( 'Mastermind', 'mmbuss' ); ?>"><span class="mm-brand-text">Mastermind<span class="mm-dot">.</span></span></a>
			<p class="mm-footer-about"><?php esc_html_e( 'A global business management and consulting firm dedicated to transforming how organizations operate, compete, and grow.', 'mmbuss' ); ?></p>
			<p class="mm-footer-tag"><?php echo esc_html( mmbuss_contact( 'tagline' ) ); ?></p>
		</div>
		<div class="mm-footer-col">
			<h3><?php esc_html_e( 'Company', 'mmbuss' ); ?></h3>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'mmbuss' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About Us', 'mmbuss' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'mmbuss' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>"><?php esc_html_e( 'Industries', 'mmbuss' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'mmbuss' ); ?></a></li>
			</ul>
		</div>
		<div class="mm-footer-col">
			<h3><?php esc_html_e( 'Services', 'mmbuss' ); ?></h3>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/services/business-management/' ) ); ?>"><?php esc_html_e( 'Business Management', 'mmbuss' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/services/consulting/' ) ); ?>"><?php esc_html_e( 'Consulting', 'mmbuss' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/services/operational-solutions/' ) ); ?>"><?php esc_html_e( 'Operational Solutions', 'mmbuss' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/services/supply-of-goods-and-services/' ) ); ?>"><?php esc_html_e( 'Supply of Goods and Services', 'mmbuss' ); ?></a></li>
			</ul>
		</div>
		<div class="mm-footer-col">
			<h3><?php esc_html_e( 'Get in Touch', 'mmbuss' ); ?></h3>
			<ul class="mm-footer-contact">
				<li><i class="ph ph-envelope" aria-hidden="true"></i><a href="mailto:<?php echo esc_attr( mmbuss_contact( 'email' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'email' ) ); ?></a></li>
				<li><i class="ph ph-phone" aria-hidden="true"></i><a href="<?php echo esc_attr( mmbuss_contact( 'phone_href' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'phone' ) ); ?></a></li>
				<li><i class="ph ph-headset" aria-hidden="true"></i><span><?php esc_html_e( 'Toll Free: ', 'mmbuss' ); ?><?php echo esc_html( mmbuss_contact( 'tollfree' ) ); ?></span></li>
				<li><i class="ph ph-map-pin" aria-hidden="true"></i><span><?php echo esc_html( mmbuss_contact( 'office' ) ); ?></span></li>
				<li><i class="ph ph-globe" aria-hidden="true"></i><a href="<?php echo esc_url( 'https://' . mmbuss_contact( 'web' ) ); ?>"><?php echo esc_html( mmbuss_contact( 'web' ) ); ?></a></li>
			</ul>
		</div>
	</div>
	<div class="mm-wrap"><p class="mm-footer-giant" aria-hidden="true">mastermind</p></div>
	<div class="mm-footer-bottom">
		<div class="mm-wrap mm-footer-bottom-inner">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Mastermind Business Systems LLC. <?php esc_html_e( 'All rights reserved.', 'mmbuss' ); ?></p>
			<nav aria-label="<?php esc_attr_e( 'Footer', 'mmbuss' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'fallback_cb'    => 'mmbuss_footer_fallback',
					)
				);
				?>
			</nav>
		</div>
	</div>
</footer>

<button class="mm-totop" id="mmToTop" aria-label="<?php esc_attr_e( 'Back to top', 'mmbuss' ); ?>"><i class="ph ph-arrow-up" aria-hidden="true"></i></button>

<?php wp_footer(); ?>
</body>
</html>
