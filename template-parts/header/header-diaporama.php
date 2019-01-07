<?php
/**
 * Displays header diaporama
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

	<?php get_template_part( 'template-parts/header/site', 'branding-accueil' ); ?>

		<div class="custom-header-diaporama">
			<?php echo do_shortcode('[INSERT_ELEMENTOR id="64"]'); ?><!-- Shortcode du plugin Elementor, générant le diaporama -->
		</div>	

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>			
		

</div><!-- .custom-header -->
