


/*
	  ---------------------------
		Navigation Menu Script
	--------------------------
*/



$('.dropdown-menu').hide();
$('.caret').addClass('fa fa-angle-right');

$('.toggler-btn').on('click', function(){
	$('.main-menu').slideToggle(200);
});

$('.dropdown').on('click', function(){
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



$('.sub-dropdown').on('click', function(event){
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
			$('.main-menu').css("display","none");
		} else {
			$('.main-menu').css("display","block");
		}
});








