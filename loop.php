<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class( 'cf d-1of2 t-1of2' ); ?> role="article">
		<div class="post-wrapper">
			<div class="d-1of2 t-1of2 post-thumb">
				<?php if (has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></a>
				<?php endif; ?>
			</div>
			<div class="d-1of2 t-1of2">
				<p><?php printf( __( '', 'bonestheme').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> ', get_the_time('Y-m-j'), get_the_time(get_option('date_format'))); ?></p>
				<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<p><?php printf( __( 'by',  'bonestheme').' <a href="" class="author">%1$s</a>', get_the_author_link( get_the_author_meta( 'ID' ) )); ?></p>
			</div>
		</div>
	</div>

	<?php endwhile; ?>

			<?php bones_page_navi(); ?>

	<?php else : ?>

			<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
						<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

	<?php endif; ?>


</main>