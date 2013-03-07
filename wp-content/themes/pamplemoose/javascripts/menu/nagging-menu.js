$(function(){
	
		
	var menu = $('#menu'), pos = menu.offset();
		
		$(window).scroll(function(){
			if($(this).scrollTop() > pos.top+menu.height() && menu.hasClass('default')){
				menu.fadeOut('1000', function(){
					$(this).removeClass('default').addClass('fixed').fadeIn(200);
					
				});
				
			} else if($(this).scrollTop() <= pos.top && menu.hasClass('fixed')){
				menu.fadeOut('100', function(){
					$(this).removeClass('fixed').addClass('default').fadeIn(200);
				});
			}
		});

});