
	

<footer>
	<div class="container">
		<div class="row">
			
				<?php wp_nav_menu(array(
						'theme_location'	=>	'footer_menu_1',
						'depth'				=>	'0',
						'container'			=>	'div',
						'container_class'	=>	'footer-menu col-sm-3',
						'menu_class'		=>	'footer-nav',
						
					)); ?>

				<?php wp_nav_menu(array(
						'theme_location'	=>	'footer_menu_2',
						'depth'				=>	'0',
						'container'			=>	'div',
						'container_class'	=>	'footer-menu col-sm-3',
						'menu_class'		=>	'footer-nav',
						
					)); ?>
				
				<?php wp_nav_menu(array(
						'theme_location'	=>	'footer_menu_3',
						'depth'				=>	'0',
						'container'			=>	'div',
						'container_class'	=>	'footer-menu col-sm-3',
						'menu_class'		=>	'footer-nav',
						
					)); ?>
			
			<div class="col-sm-3 d-flex copyright">
				<p>&copy; Copyright 2017-<?php echo date("Y"); ?> . All rights reserved.
				Developed by <a href="https://github.com/maljuburi">Muhammad Al Juburi</a></p>
			</div>
			
		</div>
	</div>
</footer>


	<?php wp_footer();?>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home-paralax.js"></script>


</body>
</html>
