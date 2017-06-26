<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php bloginfo('name')?> |
	<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	
	
</head>
<body>
	
	<!-- Navigation bar -->
	<div class="container-fluid header">
		<div class="container">
			<div class="row">
				
				

				<?php wp_nav_menu(array(
					'theme_location'	=>	'primary',
					'container'			=>	'nav',
					'container_class'	=>	'navbar navbar-inverse navbar-toggleable-sm col-sm-12',
					'menu_class'		=>	'navbar-nav',
					
					
				)); ?>

			</div>
		</div>
	</div> <!-- container-fluid -->


