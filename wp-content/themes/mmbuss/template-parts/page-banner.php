<?php
/**
 * Shared inner-page banner.
 *
 * Expects $args: title, sub, img, pos (optional background-position).
 *
 * @package MMBuss
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title = isset( $args['title'] ) ? $args['title'] : get_the_title();
$sub   = isset( $args['sub'] ) ? $args['sub'] : '';
$img   = isset( $args['img'] ) ? $args['img'] : get_template_directory_uri() . '/assets/images/about-banner.jpg';
$pos   = isset( $args['pos'] ) ? $args['pos'] : '';
?>

<section class="mm-banner">
	<div class="mm-banner-bg" style="background-image:url('<?php echo esc_url( $img ); ?>')<?php echo $pos ? ';background-position:' . esc_attr( $pos ) : ''; ?>"></div>
	<div class="mm-wrap mm-banner-inner">
		<p class="mm-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'mmbuss' ); ?></a><span class="sep">&rsaquo;</span><?php echo esc_html( $title ); ?></p>
		<h1 class="mm-banner-title"><?php echo esc_html( $title ); ?></h1>
		<?php if ( $sub ) : ?>
			<p class="mm-banner-sub"><?php echo esc_html( $sub ); ?></p>
		<?php endif; ?>
	</div>
</section>
