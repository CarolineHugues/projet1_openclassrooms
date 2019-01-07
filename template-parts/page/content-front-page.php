<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		$post_thumbnail_id = get_post_thumbnail_id( $post->ID );

		$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">

			<div class="entry-content-front-page">
				<section id="images-accueil">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) );
				?>
				</section>
				<section id="content-accueil">
					<div>
						<h2 id="titre-infos-accueil">Patrimoine, musées, spectacle vivant...</h2>
						<p>Un château renommé, un théâtre vieux de 240 ans, un festival mettant Molière à l'honneur, une bibliothèque pour chaque quartier ... : <a href="http://oc-projet1.carolinehugues.ovh/plus-d-infos/" rel="noopener"><strong>plus d'infos</strong></a>.</p>
					</div>
					<div>
						<h2>Les activités du mois</h2>
						<p>Vous pouvez dès à présent vous inscrire aux <a href="http://oc-projet1.carolinehugues.ovh/activites-du-mois/"><strong>activités du mois</strong></a>.</p>
					</div>	
				</section>
			</div><!-- .entry-content -->
		<aside id="actualite-front-page">
			<h2>Dernière actualité</h2>
			<section id="actualite-front">
			<?php
				 $my_query = new WP_Query('showposts=1');
					while ($my_query->have_posts()) : $my_query->the_post(); 

					get_template_part( 'template-parts/page/content', 'excerpt-front-page' );

			endwhile ?>	
			</section>

			<section id="actualite-suite">
				<p><input name="bouton-actualite-suite" type="button" id="bouton-actualite-suite" tabindex="1" value="Voir la suite des actualités" onclick="window.location='http://oc-projet1.carolinehugues.ovh/actualites/#suite-actualite'"  />
				</p>
			</section>
		</aside>
	</div><!-- .wrap -->
	</div><!-- .panel-content -->



</article><!-- #post-## -->
