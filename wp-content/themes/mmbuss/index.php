<?php
/**
 * Blog index (DB-driven Loop).
 *
 * @package MMBuss
 */

get_header();
$uri = get_template_directory_uri();

get_template_part(
	'template-parts/page',
	'banner',
	array(
		'title' => __( 'Insights', 'mmbuss' ),
		'sub'   => __( 'Practical thinking on strategy, operations, and growth.', 'mmbuss' ),
		'img'   => $uri . '/assets/images/hero-1.jpg',
	)
);
?>

<div class="mm-content">
	<div class="mm-wrap mm-prose">
		<?php if ( have_posts() ) : ?>
			<div class="mm-blog-list">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'mm-post' ); ?>>
					<h2 class="mm-post-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<p class="mm-post-meta"><?php echo esc_html( get_the_date() ); ?></p>
					<div class="mm-post-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</article>
				<?php
			endwhile;
			?>
			</div>
			<div class="mm-pagination">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts yet — check back soon.', 'mmbuss' ); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
