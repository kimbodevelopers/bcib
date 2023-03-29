<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css?ver=<?php echo time(); ?>"/>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owlcarousel/owl.theme.default.min.css">

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owlcarousel/owl.carousel.min.js"></script>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">	
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="wrapper">
	<header>
		<nav class="navbar navbar-expand-lg ">
			<div class="container-fluid">

				<?php 
					$nav_logo = get_field('nav_logo', 'option'); 
					$nav_logo_mobile = get_field('nav_logo_mobile', 'option');
				?>

				<a class="navbar-brand" href="<?php echo get_site_url() ?>/">
					<img class="logo desktop" src="<?php echo $nav_logo['url'] ?>" />
					<img class="logo mobile" src="<?php echo $nav_logo_mobile['url'] ?>" />
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse container-fluid" id="navbarNav">

					<div class="row navbar-row">
						<?php 
							$sub_menu_param = array(
								'theme_location' => 'nav-sub-menu',
								'menu_class' => 'header-sub-menu navbar-nav d-inline-flex',
							);
						?>

						<div class="col-12 sub-nav-wrapper ">
							<?php wp_nav_menu($sub_menu_param); ?>
							<span class="d-flex search-wrapper"><i class="fa-solid fa-magnifying-glass"></i></span>
							<?php get_template_part('inc/components/partials/standard-button', null, array('button_height' => 'short', 'button_text' => 'Apply Now', 'button_link' => '#')) ?>

						</div>
						
					</div>

					<div class="row navbar-row">
						<?php
							$main_menu_param = array(
								'theme_location' => 'nav-main-menu',
								'menu_class' => 'header-main-menu navbar-nav desktop',
							);

							$main_menu_mobile_param = array(
								'theme_location' => 'nav-main-menu',
								'menu_class' => 'header-main-menu navbar-nav mobile',
								'walker' => new Custom_Walker_Nav_Menu(),
							);
						?>

						<div class="col-12">
							<?php wp_nav_menu($main_menu_param); ?>
						</div>
					</div>


					<?php wp_nav_menu($main_menu_mobile_param); ?>

					<script>

						let a;
						$(window).resize(function() {
							
							clearTimeout(a);
							
							a = setTimeout(function() {
								appendList();
							}, 500)
						
						})

						let appendList = () => {
							if($(window).width() < 991) {
								
								setTimeout(function() {
									$('.menu-main-nav-container').find('#menu-sub-nav:not(:first)').remove();
									$('#menu-sub-nav').appendTo('.menu-main-nav-container');
									$('.menu-main-nav-container').find('#menu-sub-nav:not(:last-of-type)').remove();

								}, 200)
							} 
							
							if($(window).width() >= 991) {
								$('#menu-sub-nav').detach().appendTo('.menu-sub-nav-container');
								$('.menu-main-nav-container').find('#menu-sub-nav').remove();
							}

						}
	
						appendList()
				
					</script>

				</div>
			</div>
		</nav>
	</header>

	<main id="main">
	