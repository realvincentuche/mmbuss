<?php
/**
 * Conditional dynamic-content section.
 *
 * Prints the live DB page content (shortcodes like Contact Form 7, pasted
 * text, slider shortcodes) in a centered container — only when the page
 * actually has content. Baked-in template design always renders above it.
 *
 * @package MMBuss
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

while ( have_posts() ) :
	the_post();
	$content = trim( get_the_content() );
	if ( '' !== $content ) :
		?>
		<section class="mmbuss-dynamic">
			<div class="mmbuss-wrap mmbuss-dynamic-inner">
				<?php the_content(); ?>
			</div>
		</section>
		<?php
	endif;
endwhile;
