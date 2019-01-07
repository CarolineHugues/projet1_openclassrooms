<?php
/**
 * Template part for displaying posts with excerpts on front-page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
			
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header id="header-actualite-front">	
			<a href="<?php the_permalink(); ?>">
				<h3 class="entry-title"><?php the_title(); ?></h3>
			</a>	

			<h4 class="entry-meta"><?php the_date(); ?></h4>
		</header>	
	<section id="resume-front-page">
		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
		<?php endif; ?>

		<div class="resume-front-page">
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<div class="bouton-lire">
				<p><input name="lire-article" type="button" id="lire-article" tabindex="1" value="Lire" onclick="window.location='<?php the_permalink(); ?>'" />
				</p>
			</div>		
				
			<div id="signature"><a href="/contact/">Mairie de Versailles</a>
			</div>
		</div>
	</section>	

</article><!-- #post-## -->

