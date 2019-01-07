<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<p> Copyright &#169; 2017 - 
		<?php print(date(Y)); ?> 
		<br /> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		<br /> HUGUES Caroline <br /> Site fictif réalisé dans le cadre de la formation Chef de projet multimédia - spécialité Développement d'OpenClassrooms
	</p> 
</div><!-- .site-info -->
