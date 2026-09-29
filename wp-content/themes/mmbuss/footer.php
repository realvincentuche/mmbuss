<?php
/**
 * Footer template.
 *
 * @package MMBuss
 */
?>

</main>

<footer class="mmbuss-footer">
	<div class="mmbuss-wrap">
		<nav class="mmbuss-footer-nav" aria-label="<?php esc_attr_e( 'Footer', 'mmbuss' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav>
		<p class="mmbuss-copy">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'mmbuss' ); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
