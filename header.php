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
				
					<div class="brand display-4 col-xs-12 col-md-3"><?php bloginfo('name'); ?></div>

					<button class="toggler-btn">
						<i class="fa fa-bars"></i>
					</button>
					
					
					<?php wp_nav_menu(array(
						'menu'				=>	'primary',
						'theme_location'	=>	'primary',
						'depth'				=>	'0',
						'container'			=>	'div',
						'container_class'	=>	'main-menu col-xs-12 col-md-9',
						'container_id'		=>	'main-menu',
						'menu_class'		=>	'nav justify-content-end',
						'fallback_cb'       => 'LOE_Bootstrap_Navwalker::fallback',
						'walker'			=>	new LOE_Bootstrap_Navwalker()
					)); ?>
					
			</div>
		</div>
	</div> <!-- container-fluid -->


