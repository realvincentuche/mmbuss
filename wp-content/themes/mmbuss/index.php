<?php
/**
 * Blog index (DB-driven Loop).
 *
 * @package MMBuss
 */

get_header();
?>

<div class="mmbuss-wrap mmbuss-blog">
	<h1 class="mmbuss-page-title"><?php esc_html_e( 'Blog', 'mmbuss' ); ?></h1>

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'mmbuss-post' ); ?>>
				<h2 class="mmbuss-post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<p class="mmbuss-post-meta"><?php echo esc_html( get_the_date() ); ?></p>
				<div class="mmbuss-post-excerpt">
					<?php the_excerpt(); ?>
				</div>
			</article>
			<?php
		endwhile;
		?>

		<div class="mmbuss-pagination">
			<?php the_posts_pagination(); ?>
		</div>
	<?php else : ?>
		<p><?php esc_html_e( 'No posts yet.', 'mmbuss' ); ?></p>
	<?php endif; ?>
</div>

<?php
get_footer();
