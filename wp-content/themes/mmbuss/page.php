<?php
/**
 * Default page template (fallback for pages without a dedicated template).
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

while ( have_posts() ) :
	the_post();
	get_template_part(
		'template-parts/page',
		'banner',
		array(
			'title' => get_the_title(),
			'sub'   => '',
			'img'   => $uri . '/assets/images/about-banner.jpg',
		)
	);
	?>
	<div class="mm-content">
		<div class="mm-wrap mm-prose">
			<?php the_content(); ?>
		</div>
	</div>
	<?php
endwhile;

get_footer();
