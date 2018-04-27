			<div class="logo-support">
				
						<ul class="wrap cf">
							<li><a href="http://www.kemlu.go.id/stockholm/id/default.aspx" target="_blank"><img src="<?php get_site_url(); ?>/wp-content/themes/bestla/library/images/kbri-swedia.png"></a></li>
							<li><a href="https://www.facebook.com/EmbassyofSwedeninJakarta/" target="_blank"><img src="<?php get_site_url(); ?>/wp-content/themes/bestla/library/images/embassy-sweden-jakarta.gif"></a></li>
							<li><a href="http://www.svensk-indonesiska.se/" target="_blank"><img src="<?php get_site_url(); ?>/wp-content/themes/bestla/library/images/sis.jpg"></a></li>
							<li><a href="https://studyinsweden.se/" target="_blank"><img src="<?php get_site_url(); ?>/wp-content/themes/bestla/library/images/logo_si.png"></a></li>
						</ul>
			</div>
			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					<div class="footer-menu">
						<ul class="m-all t-1of3 d-1of3 cf">
							<li>
								<strong>Kota</strong>
								<ul>
									<li><a href="">Gothenburg</a></li>
									<li><a href="">Skåne</a></li>
									<li><a href="">Stockholm</a></li>
									<li><a href="">Uppsala</a></li>
								</ul>
							</li>
						</ul>
						<ul class="m-all t-1of3 d-1of3 cf">
							<li><a href="">Beasiswa</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="">FAQ</a></li>
							<li><a href="">Tentang Kami</a></li>
							<li><a href="">Kontak</a></li>
						</ul>
						<div class="m-all t-1of3 d-1of3 cf">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
							<ul class="socmed-icons">
							<li><a href="http://facebook.com/ppiswediafanpage" class="icon-fb"></a></li>
							<li><a href="http://instagram.com/ppiswedia" class="icon-ig"></a></li>
							<li><a href="https://www.youtube.com/channel/UCOfELTqYiVRtsJzYc7uJicw" class="icon-yt"></a></li>
							<li><a href="http://twitter.com/ppiswedia" class="icon-tw"></a></li>
							</ul>
						</div>
					</div>

					

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
