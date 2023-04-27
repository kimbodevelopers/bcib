<?php if($args['button_link'] || $args['button_text']) : ?>
	<div class="standard-button-wrapper">
		<?php 
			$button_link = $args['button_link'];
			$button_text = $args['button_text'];
			$button_height = $args['button_height'];
			$button_background = $args['button_background'];
		?>

		<a href="<?php echo $button_link ?>" class="btn-animated standard-button _13 _bold <?php echo $button_height ?> <?php echo $button_background?>"><?php echo $button_text ?></a>
	</div>
<?php endif; ?>