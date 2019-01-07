<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
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
	<section id="thumbnail-page-actualite">
		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
				</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>
	</section>

	<section id="texte-excerpt-page-actualite">
	<header class="entry-header">
		<?php if ( is_front_page() && ! is_home() ) {

			// The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
			the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		} else {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		} ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
				?>
			</div><!-- .entry-meta -->
		<?php elseif ( 'page' === get_post_type() && get_edit_post_link() ) : ?>
			<div class="entry-meta">
				<?php twentyseventeen_edit_link(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<div class="bouton-lire">
					<p>
					<input name="lire-article" type="button" id="lire-article" tabindex="1" value="Lire" onclick="window.location='<?php the_permalink(); ?>'" />
					</p>
				</div>

	<div id="signature"><a href="/contact/">Mairie de Versailles</a></div>
	</section>
</article><!-- #post-## -->
