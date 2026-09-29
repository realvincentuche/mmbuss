<?php
/**
 * Single post template (DB-driven Loop).
 *
 * @package MMBuss
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'mmbuss-single' ); ?>>
		<div class="mmbuss-wrap">
			<h1 class="mmbuss-page-title"><?php the_title(); ?></h1>
			<p class="mmbuss-post-meta"><?php echo esc_html( get_the_date() ); ?></p>
			<div class="mmbuss-page-body">
				<?php the_content(); ?>
			</div>
			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		</div>
	</article>
	<?php
endwhile;

get_footer();
