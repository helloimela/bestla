<!-- /*
* Template Name: Daftar Kota Template
*
* @package WordPress
* @subpackage bestla
* @since 1.0
*/
 * -->

<?php get_header(); ?>
	
	<div id="content" class="daftarkota">
	
		<div class="wrap cf">
			<h1>PPI di Swedia</h1>
			<p>Persebaran mahasiswa Indonesia di kota-kota Swedia. Klik pada peta untuk melihat link ke halaman tiap kota.</p>
		</div>
		
		<div class="map-wrapper">
			<div id="mapKota"></div>
		</div>

		<div id="inner-content" class="wrap cf">
				<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<section class="cf m-all t-all d-all" itemprop="articleBody">
						
					</section> <?php // end article section ?>

					<?php comments_template(); ?>

				</article>

			</main>

		</div>

	</div>

<?php get_footer(); ?>
