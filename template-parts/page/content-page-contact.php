<?php
/**
 * Template part for displaying page content in page content.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
		<aside id="a-propos"><h2>Qui sommes-nous ?</h2>
			<img src="http://oc-projet1.carolinehugues.ovh/wp-content/uploads/2017/11/logo_versailles_projet.jpg" />
			<p>Située dans le département des Yvelines et dans la région Ile-de-France, Versailles est une ville dotée de nombreuses institutions culturelles, d'un grand nombre d'associations œuvrant pour la culture ainsi que d'un riche patrimoine.</p>
			<p>Géré par la mairie de Versailles, ce site a pour but de promouvoir la culture de la ville.</p>
		</aside>	
	</div><!-- .entry-content -->
</article><!-- #post-## -->
