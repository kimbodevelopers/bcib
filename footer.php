</main><!-- /#main -->



		<footer>
			<?php if( get_field('land_acknowledgement', 'option')) {   ?>
				<?php the_field('land_acknowledgement', 'option') ?>
			<?php } ?>
			
			<?php if( get_field('acknowledgement_content', 'option')) {   ?>
				<?php the_field('acknowledgement_content', 'option') ?>
			<?php } ?>
			
			

		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<!-- JavaScript -->


	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

	

	<?php
		wp_footer();
	?>
</body>
</html>