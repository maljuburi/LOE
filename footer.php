
	

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
				<p>All Rights Reserved | Lots Of English &copy; <?php echo date("Y"); ?> | Developed by <a href="http://www.codetograph.com/">CodeToGraph</a></p>
			</div>
			
		</div>
	</div>
</footer>
	<?php wp_footer();?>

</body>
</html>
