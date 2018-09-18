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
		<?php $uploads = wp_upload_dir(); ?>
		<div class="wrap cf">
			<h1>PPI di Swedia</h1>
			<p>Persebaran mahasiswa Indonesia di kota-kota Swedia.</p>
			<div class="list-all-kota rows">
				<div class="d-1of3" data-href="<?php echo get_permalink( get_page_by_path( 'lulea' ) );?>lulea/">
					<div class="img-wrp" style="background-image:url(<?php echo get_site_url();?>/wp-content/uploads/2017/07/child-city-hot-869-768x472-768x472.jpg);"></div>
					<div class="nama-kota">Luleå, Umeå, Kiruna</div>
				</div>

				<div class="d-1of3" data-href="<?php echo get_permalink( get_page_by_path( 'uppsala' ) );?>uppsala/">
					<div class="img-wrp" style="background-image:url(<?php echo get_site_url();?>/wp-content/uploads/2017/07/child-city-hot-869-768x472-768x472.jpg);"></div>
					<div class="nama-kota">Uppsala</div>
				</div>
				
				<div class="d-1of3" data-href="<?php echo get_permalink( get_page_by_path( 'stockholm' ) );?>stockholm/">
					<div class="img-wrp" style="background-image:url(<?php echo get_site_url();?>/wp-content/uploads/2017/07/child-city-hot-869-768x472-768x472.jpg);"></div>
					<div class="nama-kota">Stockholm</div>
				</div>

				<div class="d-1of3" data-href="<?php echo get_permalink( get_page_by_path( 'gothenburg' ) );?>gothenburg/">
					<div class="img-wrp" style="background-image:url(<?php echo get_site_url();?>/wp-content/uploads/2017/07/child-city-hot-869-768x472-768x472.jpg);"></div>
					<div class="nama-kota">Gothenburg</div>
				</div>

				<div class="d-1of3" data-href="<?php echo get_permalink( get_page_by_path( 'lund' ) );?>lund/">
					<div class="img-wrp" style="background-image:url(<?php echo get_site_url();?>/wp-content/uploads/2017/07/child-city-hot-869-768x472-768x472.jpg);"></div>
					<div class="nama-kota">Skåne</div>
				</div>

			</div>
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
