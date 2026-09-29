<?php
/**
 * Shared inner-page banner with bold background image.
 *
 * Expects $args: title, sub, img.
 *
 * @package MMBuss
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title = isset( $args['title'] ) ? $args['title'] : get_the_title();
$sub   = isset( $args['sub'] ) ? $args['sub'] : '';
$img   = isset( $args['img'] ) ? $args['img'] : get_template_directory_uri() . '/assets/images/about-banner.jpg';
?>

<section class="mm-banner">
	<div class="mm-banner-bg" style="background-image:url('<?php echo esc_url( $img ); ?>')"></div>
	<div class="mm-wrap mm-banner-inner">
		<p class="mm-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'mmbuss' ); ?></a> / <?php echo esc_html( $title ); ?></p>
		<h1 class="mm-banner-title"><?php echo esc_html( $title ); ?></h1>
		<?php if ( $sub ) : ?>
			<p class="mm-banner-sub"><?php echo esc_html( $sub ); ?></p>
		<?php endif; ?>
	</div>
</section>
