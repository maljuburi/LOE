<?php 

function LOE_customize_css_output(){ ?>

	<style type="text/css">
		.header{
			background: <?php echo get_theme_mod('navbar_bg_color'); ?>
		}

		.navbar-brand,
		.nav-link,
		.fa-bars{
			color: <?php echo get_theme_mod('navbar_text_color'); ?> !important;
		}


		body,
		footer{
			background: <?php echo get_theme_mod('footer_bg_color'); ?>;
		}
		.copyright{
			color: <?php echo get_theme_mod('footer_text_color'); ?>;
		}


	</style>

<?php
}
