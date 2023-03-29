</main><!-- /#main -->



		<footer class="site-component-container footer-container">

			<div class="site-component-row small row acknowledgement-row">
				
				<?php if( get_field('land_acknowledgement_title', 'option')) : ?>
					<div class="col-md-6">
						<h2 class="title-text _white _medium _48"><?php the_field('land_acknowledgement_title', 'option') ?></h2>
					</div>
				<?php endif; ?>
				
				<?php if( get_field('acknowledgement_content', 'option')) : ?>
					<div class="col-md-6">
						<div class="body-text _20 _white">
							<?php the_field('acknowledgement_content', 'option') ?>
						</div>
					</div>
				<?php endif; ?>
				
			</div>

			<div class="site-component-row small row menus-row">
				<div class="col-md-4">
					<h3 class="body-text _uppercase _20 _brand-yellow _bold">I am a</h3>
					<?php
						$footer_personnel_menu_param = array(
							'theme_location' => 'footer-personnel-menu',
							'menu_class' => 'footer-menu',
						);

						wp_nav_menu($footer_personnel_menu_param);
					?>

				</div>

				<div class="col-md-4">
					<h3 class="body-text _uppercase _20 _brand-yellow _bold">How do I</h3>

					<?php
						$footer_how_menu_param = array(
							'theme_location' => 'footer-how-menu',
							'menu_class' => 'footer-menu',
						);

						wp_nav_menu($footer_how_menu_param);

					?>
				</div>

				<div class="col-md-4">
					<h3 class="body-text _uppercase _20 _brand-yellow _bold">More</h3>

					<?php
						$footer_more_menu_param = array(
							'theme_location' => 'footer-more-menu',
							'menu_class' => 'footer-menu',
						);

						wp_nav_menu($footer_more_menu_param);

					?>
					<div class="icon-row">
						<a href="#" class="icon-wrapper">
							<i class="fa-brands fa-twitter"></i>
						</a>

						<a href="#" class="icon-wrapper">
							<i class="fa-brands fa-linkedin-in"></i>
						</a>

						<a href="#" class="icon-wrapper">
							<i class="fa-brands fa-instagram"></i>
						</a>

						<a href="#" class="icon-wrapper">
							<i class="fa-brands fa-facebook-f"></i>
						</a>
					</div>

				</div>
			</div>

			<div class="site-component-row small row privacy-row">
				<div class="col-md-8">
					<p class="body-text _20 _white "><?php the_field('copyright', 'options') ?></p>
					<p class="body-text _20 _white ">
						<a class="_white" href="<?php the_field('privacy_statement', 'options') ?>">BCIB Privacy Statement</a>&nbsp;|&nbsp;
						<a class="_white" href="<?php the_field('disclaimer', 'options') ?>">Disclaimer</a>
					</p>
				</div>
				<div class="col-md-4">
					(link to social policy)
				</div>
			</div>

		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<!-- JavaScript -->


	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

	

	<?php
		wp_footer();
	?>
</body>
</html>