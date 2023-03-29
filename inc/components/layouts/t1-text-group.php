<?php if( get_row_layout() == 't1_text_group' ): ?>
    <?php while(have_rows('text_group')) : the_row();
		$title_only = get_sub_field('title_only');
        $content = get_sub_field('content');
        $images = get_sub_field('gallery');
        $indicator_index = 1;
        $image_index = 1;
    ?>
		
		<?php if($title_only) : ?>
			<div class="container-fluid site-component-container t1-container pb-1 pb-md-4">
				<div class="row site-component-row t1-row small">
					<div class="body-text _17 t1-content">
						<h1 class="mb-0">
							<?php echo $title_only ?>
						</h1>
					</div>
				</div>
			</div>

		<?php else : ?>

			<div class="container-fluid site-component-container t1-container">
				<div class="row site-component-row t1-row small">
					<div class="<?php if($images) : ?>col-lg-8 col-md-7 col-sm-6<?php else : ?>col-12<?php endif; ?> t1-column">
						<?php if($content) : ?>
							<div class="body-text _17 t1-content"><?php echo $content ?></div>
						<?php endif; ?>
					</div>

					<?php if($images) : ?>


						<div id="carouselT1Indicator-<?php echo get_row_index() ?>" class="carousel slide col-lg-4 col-md-5 col-sm-6" data-bs-ride="carousel">

							<?php if(count($images) > 1) : ?>
								<div class="carousel-indicators">
									<?php foreach($images as $image) : ?>
										<button type="button" data-bs-target="#carouselT1Indicator-<?php echo get_row_index() ?>" class="<?php if($indicator_index === 1) : ?>active<?php endif; ?>" data-bs-slide-to="<?php echo $indicator_index -1 ?>" <?php if($indicator_index === 1) : ?>aria-current="true"><?php endif; ?></button>
										<?php $indicator_index++; ?>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

							<div class="carousel-inner">
								<?php foreach($images as $image) : ?>
									<div class="carousel-item <?php if($image_index === 1) : ?>active<?php endif; ?>">

										<img class="d-block w-100" src="<?php echo esc_url($image['url']); ?>" />
									</div>

								<?php $image_index++  ?>
								<?php endforeach; ?>
							</div>

							<?php if(count($images) > 1) : ?>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselT1Indicator-<?php echo get_row_index() ?>" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselT1Indicator-<?php echo get_row_index() ?>" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							<?php endif; ?>

						</div>
					<?php endif; ?>
				</div>

			</div>

		<?php endif; ?>



    <?php endwhile; ?>

<?php endif; ?>