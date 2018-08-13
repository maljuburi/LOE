
<footer>
	<div class="container">
		<div class="row">
			<div class="footer-menu col-sm-3">
				<?php wp_nav_menu(array(
					'theme_location'	=>	'footer_menu_1',
					'depth'				=>	'0',
					'container'			=>	false,
					'menu_class'		=>	'footer-nav',
					
					)); ?>
			</div>
			<div class="footer-menu col-sm-3">
				<?php wp_nav_menu(array(
					'theme_location'	=>	'footer_menu_2',
					'depth'				=>	'0',
					'container'			=>	false,
					'menu_class'		=>	'footer-nav',
					
					)); ?>
			</div>
			<div class="footer-menu col-sm-3">
				<?php wp_nav_menu(array(
					'theme_location'	=>	'footer_menu_3',
					'depth'				=>	'0',
					'container'			=>	false,
					'menu_class'		=>	'footer-nav',
					
					)); ?>
			</div>
			
			
			
			<div class="col-sm-3 d-flex">
				<div class="row">
					<div class="col-sm-12 social-media">
						<?php
							$facebookLink = get_option('facebook');
							$instagramLink = get_option('instagram');
							$twitterLink = get_option('twitter');
						?>
						<?php if(!empty($facebookLink)){ ?>
							<a class="facebook" href="<?php echo $facebookLink; ?>" target="_blank"><img width="45" src="<?php echo get_template_directory_uri()."/assets/facebook.svg" ?>" alt="facebook link"></a>
						<?php } ?>

						<?php if(!empty($instagramLink)){ ?>
							<a class="instagram" href="<?php echo $instagramLink; ?>" target="_blank"><img width="50" src="<?php echo get_template_directory_uri()."/assets/instagram.svg" ?>" alt="instagram link"></a>
						<?php } ?>
						
						<?php if(!empty($twitterLink)){ ?>
							<a class="twitter" href="<?php echo $twitterLink; ?>" target="_blank"><img width="45" src="<?php echo get_template_directory_uri()."/assets/twitter.svg" ?>" alt="twitter link"></a>
						<?php } ?>

					</div>

					<div class="col-sm-12 copyright">
						<p>&copy; Copyright 2017-<?php echo date("Y"); ?> . All rights reserved.
						Developed by <a href="https://maljuburi.github.io/" target="_blank">Muhammad Al Juburi</a></p>
					</div>
				</div>
			</div>

			
		</div>
	</div>
</footer>


	<?php wp_footer();?>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home-paralax.js"></script>

</body>
</html>
