$(function(){
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');
		/* Abrir menu através de fadeIn
		if(listaMenu.is(':hidden') == true){
			listaMenu.fadeIn();
		}
		else{
			listaMenu.fadeOut();
		}
		//OU
		*/
		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-times');
			icone.addClass('fa-bars');
			listaMenu.slideToggle();
		}
	});

	if ($('target').length > 0) {
		//O elemento existe, portanto precisamos dar o scroll em algum elemento
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html, body').animate({'scrollTop':divScroll}, 2000);//2000 = 2 segs
	}
})