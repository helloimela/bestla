<?php get_header(); ?>

			<div id="content">

				<!-- featured part -->
				<div class="pagehero">
					<video id="videopagehero" playsinline autoplay muted loop>
						<source src="<?php get_site_url(); ?>/wp-content/themes/bestla/library/video/video-drone.webm" type="video/webm">
						<source src="<?php get_site_url(); ?>/wp-content/themes/bestla/library/video/video-drone.mp4" type="video/mp4">
					</video>
					<div class="wrap">
						<div id="slider" class="d-2of3">
							<?php echo do_shortcode("[metaslider id=103]"); ?>
						</div>
						
						<!-- <div id="slider" class="d-2of3">
							<?php
							  $args = array(
							        'posts_per_page' => 5,
							        'meta_key' => 'meta-checkbox',
							        'meta_value' => 'yes'
							    );
							    $featured = new WP_Query($args);
							 
							if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
							<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
							<?php if (has_post_thumbnail()) : ?>
							<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> </figure>

							<?php
							endif;
							endwhile; else:
							endif;
							?>
						</div> -->
						<div id="quick-links" class="d-1of3">
							<ul>
								<li><a href="<?php echo get_permalink($post=93); ?>">Persiapan Kuliah</a></li>
								<li><a href="<?php echo get_permalink($post=19); ?>">Info Beasiswa</a></li>
								<li><a href="<?php echo get_permalink($post=95); ?>">Hidup di Swedia</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div id="inner-content" class="wrap cf">

					<!-- main loop -->
					<?php get_template_part('loop'); ?>
						

					<?php get_sidebar(); ?>

				</div>

				<div class="instagram-feed">
					<h1>Instagram</h1>
					<?php echo do_shortcode("[instagram-feed]"); ?>
				</div>

			</div>


<?php get_footer(); ?>
