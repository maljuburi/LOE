
/*
	  -----------------------------------------------
		Parallax effect for the Levels cards Script
	---------------------------------------------
*/


$(window).scroll(function() {
	var yScroll = $(this).scrollTop();


	if(yScroll> $('.card-deck').offset().top -($(window).height()/1.1)){
		$('.card-deck .level').each(function(i){

			setTimeout(function(){
				$('.levels').eq(i).addClass('levels-show');
				$('.card-deck .level').eq(i).addClass('level-show');
			
			}, 300 * (i+1));
		});
	}

});
