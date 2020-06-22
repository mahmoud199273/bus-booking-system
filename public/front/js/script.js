window.onload = function(){
	$('.burger_icon').click(function(e){
		$('.collapsed_nav').css('display', 'block');
		e.stopPropagation();
	});

	$('.close_nav').click(function(e){
		$('.collapsed_nav').css('display', 'none');
	});

	$(document).click(function(){
	    $('.collapsed_nav').css('display', 'none');
	});

	$("#scroll_top").click(function(){
        $('html, body').animate({scrollTop: 0}, 1000);
    });
}