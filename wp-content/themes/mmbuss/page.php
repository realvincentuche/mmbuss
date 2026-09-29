<?php
/**
 * Default page template.
 *
 * @package MMBuss
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'mmbuss-page' ); ?>>
		<div class="mmbuss-wrap">
			<h1 class="mmbuss-page-title"><?php the_title(); ?></h1>
			<div class="mmbuss-page-body">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
	<?php
endwhile;

get_footer();
