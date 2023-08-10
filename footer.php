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
			<div class="col-md-6">
				<?php if ( is_active_sidebar( 'footer-left-widget' ) ) : ?>
					<div id="footer-left-widget" class="footer-left-widget">
						<?php dynamic_sidebar( 'footer-left-widget' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-md-6">
				<nav id="footer-nav" class="navbar" aria-labelledby="footer-nav-label">
					<h2 id="footer-nav-label" class="screen-reader-text">
						<?php esc_html_e( 'Footer Navigation', 'tchc-understrap-child' ); ?>
					</h2>
					<div class="<?php echo esc_attr( $container ); ?>">
						<!-- The WordPress Menu goes here -->
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'footer-menu',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => 'false',
								'menu_id'         => 'footer-menu',
								'depth'           => 1,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
						?>
					</div><!-- .container(-fluid) -->
				</nav><!-- #footer-nav -->
				<?php if ( is_active_sidebar( 'footer-right-widget' ) ) : ?>
					<div id="footer-right-widget" class="footer-right-widget">
						<?php dynamic_sidebar( 'footer-right-widget' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="site-info text-center my-3">
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
