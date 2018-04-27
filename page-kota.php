<!-- /*
* Template Name: Page Kota Template
*
* @package WordPress
* @subpackage bestla
* @since 1.0
*/
 * -->


<?php get_header(); ?>
	
	<div id="content" class="pagekota">
	<?php if (have_posts()) : while (have_posts()) : the_post(); 
		$kota_name = get_post_meta( get_the_ID(), 'kota-name', true );
		$kota_akomodasi = get_post_meta( get_the_ID(), 'kota-akomodasi', true );
		$kota_biaya = get_post_meta( get_the_ID(), 'kota-biaya', true );
		$kota_kegiatan = get_post_meta( get_the_ID(), 'kota-kegiatan', true );
		$kota_ibadah= get_post_meta( get_the_ID(), 'kota-ibadah', true );
		$kota_htgt= get_post_meta( get_the_ID(), 'kota-htgt', true );
		$kota_tourist= get_post_meta( get_the_ID(), 'kota-tourist', true );
		$kota_website= get_post_meta( get_the_ID(), 'kota-website', true );
	?>
		<div class="wrap cf"><h1><?php echo $kota_name; ?></h1></div>
		<?php if (has_post_thumbnail()) : ?>
			<div class="page-header" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)"></div>
		<?php else: ?>
			<div class="page-header"></div>
		<?php endif; ?>


		<div id="inner-content" class="wrap cf">
				<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<nav class="page-nav">
					<ul>
						<li><a href="#akomodasi">Akomodasi</a></li>
						<li><a href="#biaya">Biaya Hidup</a></li>
						<li><a href="#transportasi">Transportasi</a></li>
						<li><a href="#ibadah">Tempat Ibadah</a></li>
						<li><a href="#tourist">Sights &amp; Landmarks</a></li>
					</ul>
				</nav>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<section class="cf m-all t-3of4 d-3of4" itemprop="articleBody">
						<a name="akomodasi"></a>
						<h2>Akomodasi</h2>
						<?php echo "<p>" . $kota_akomodasi . "</p>"; ?>

						<a name="biaya"></a>
						<h2>Biaya Hidup</h2>
						<?php echo "<p>" . $kota_biaya . "</p>"; ?>

						<a name="transportasi"></a>
						<h2>Transportasi</h2>
						<?php echo "<p>" . $kota_htgt . "</p>"; ?>

						<a name="ibadah"></a>
						<h2>Tempat Ibadah</h2>
						<?php echo "<p>" . $kota_ibadah . "</p>"; ?>

						<a name="tourist"></a>
						<h2>Sights &amp; Landmarks</h2>
						<?php echo "<p>" . $kota_tourist . "</p>"; ?>
						<?php
							// the content (pretty self explanatory huh)
							the_content();
						?>
					</section> <?php // end article section ?>
					<div class="m-all t-1of4 d-1of4">
						<h5>Website</h5>
						<?php echo "<a href='".$kota_website."' target='_blank'>[ Link ]</a>"; ?>
						<h5>Kegiatan</h5>
						<?php echo "<p>" . $kota_kegiatan . "</p>"; ?>
					</div>

							<?php comments_template(); ?>

				</article>

			<?php endwhile; endif; ?>

			</main>

		</div>

	</div>

<?php get_footer(); ?>
