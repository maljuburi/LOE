<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php bloginfo('name')?> |
	<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php wp_head(); ?>


</head>
<body>

	<!-- Navigation bar -->
	<div class="container-fluid header">
		<div class="container">
			<div class="row">

					<div class="brand display-4 col-xs-12 col-md-3"><a href="<?php echo home_url(); ?>"><img width="30" src="<?php echo get_theme_mod('logo', get_bloginfo('template_url').'/assets/icon.svg'); ?>" alt="Logo Image"> <?php bloginfo('name'); ?></a></div>

					<button class="toggler-btn">
						<i class="fa fa-bars"></i>
					</button>


					<?php wp_nav_menu(array(
						'theme_location'	=>	'header_menu',
						'depth'				=>	'0',
						'container'			=>	'div',
						'container_class'	=>	'main-menu col-xs-12 col-md-9',
						'container_id'		=>	'main-menu',
						'menu_class'		=>	'nav justify-content-end',
						'fallback_cb'       => 'LOE_Nav_Walker::fallback',
						'walker'			=>	new LOE_Nav_Walker()
					)); ?>

			</div>
		</div>
	</div> <!-- container-fluid -->
