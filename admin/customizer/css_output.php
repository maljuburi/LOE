<?php 

function LOE_customize_css_output(){ ?>

	<style type="text/css">
		.header,
		.dropdown-menu{
			background: <?php echo get_theme_mod('navbar_bg_color'); ?>
		}

		.brand a,
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

		.footer-nav li a{
			color: <?php echo get_theme_mod('footer_text_color'); ?>;
		}
		.footer-nav>li li a{
			color: <?php echo get_theme_mod('footer_text_color'); ?>;
		}

	</style>

<?php
}
