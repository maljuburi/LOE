
	

<footer>
	<div class="container">
		<div class="row">
			
				<?php wp_nav_menu(array(
						'menu'				=>	'secondary',
						'theme_location'	=>	'secondary',
						'depth'				=>	'0',
						'container'			=>	'div',
						'container_class'	=>	'footer-menu col-sm-8',
						'container_id'		=>	'footer-menu',
						'menu_class'		=>	'footer-nav',
						'fallback_cb'       => 'LOE_Bootstrap_Navwalker::fallback',
						'walker'			=>	new LOE_Bootstrap_Navwalker()
					)); ?>
			
			<div class="col-md-4 copyright">
				<p>&copy; LOE 2017</p>
			</div>
			
		</div>
	</div>
</footer>
	<?php wp_footer();?>

</body>
</html>
