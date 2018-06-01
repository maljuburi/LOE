


/*
	  ---------------------------
		Navigation Menu Script
	--------------------------
*/
var mainMenu = $('.main-menu');
var dropdown = $('.dropdown');
var subDropdown = $('.sub-dropdown');



$('.toggler-btn').on('click', function(){
	mainMenu.slideToggle(200);
});


dropdown.on('click', function(){
	$('>.dropdown-menu',this).slideToggle(200,function(){
			if ($(this).is(':hidden')) {

				$(this).siblings('.nav-link').children('.caret').css({
					'transform': 'rotate(0deg)'
				});

			}else{

				$(this).siblings('.nav-link').children('.caret').css({
					'transform': 'rotate(90deg)'
				});

			}
	});

});



subDropdown.on('click', function(event){
	$('>.dropdown-menu',this).slideToggle(200,function(){
		if ($(this).is(':hidden')) {
			$(this).siblings('.nav-link').children('.caret').css({
				'transform': 'rotate(0deg)'
			});
		}else{
			$(this).siblings('.nav-link').children('.caret').css({
				'transform': 'rotate(90deg)'
			});
		}

	});
	event.stopPropagation();

});



$(window).resize(function(){
		if (window.matchMedia("(max-width:767px)").matches) {
			mainMenu.css("display","none");
		} else {
			mainMenu.css("display","block");
		}
});


