$(document).ready(function(){


	$('.navbar-nav').wrap('<div class="collapse navbar-collapse justify-content-end" id="navbarNav"></div>');

	$('#navbarNav').before('<div class="navbar-brand">Lots of English</div><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>');

	$('.navbar-nav>.menu-item').addClass('nav-item');
	$('.menu-item>a').addClass('nav-link');
	
	$('.menu-item-has-children').addClass('dropdown');
	
	$('.menu-item-has-children>a').attr({
		'class': 'dropdown-toggle nav-link',
		'id': 'dropdownMenu',
		'data-toggle': 'dropdown',
		'aria-haspopup': 'true',
		'aria-expanded': 'false'
	});



	$('.sub-menu').attr({
		'class': 'dropdown-menu sub-menu',
		'aria-labelledby': 'dropdownMenu'
	});

	$('.sub-menu a').removeClass('nav-link').addClass('dropdown-item');

});