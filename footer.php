<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="site-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<div class="site-info">
					<?php understrap_site_info(); ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
