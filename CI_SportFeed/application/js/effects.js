$(document).ready(function() { 
//Dropdown menu jää roikkumaan hetkeksi kun hiiri poistuu. Alla oleva linkki auttoi
	//http://stackoverflow.com/questions/1273566/how-do-i-check-if-the-mouse-is-over-an-element-in-jquery
	$('#navbox li a').mouseenter(function() { 
		clearTimeout($(this).data('timeoutId')); //ajastin pois kun linkin päällä
		var parent = $(this).parent(),
			left = ($(this).offset().left + $(this).width() +5 )+'px',
			top = $(this).position().top+'px';

		//Fadein ja asetetaan dropdown kunnolliseen paikkaan
		parent.children('.teamscontainer').fadeIn('fast').css({ 'left': left, 'top':top});

	}).mouseleave(function() { //kursorin poistuessa odotetaan hetki ennen kuin piilotettaan menu
		var hoverelem = $(this),
			timeoutId = setTimeout(function(){
				            hoverelem.parent().children('.teamscontainer').fadeOut('fast');
				        }, 500);
			
		//set the timeoutId, allowing us to clear this trigger if the mouse comes back over
			hoverelem.data('timeoutId', timeoutId); 
	});

	//Esiin tulleelle menulle samat temput. Tarvii muuttaa vain jo asetetun anchorin timeoutId:tä
	$('.teamscontainer').mouseenter(function(){
		clearTimeout($(this).parent().children('a').data('timeoutId'));
	}).mouseleave(function() { 
		var hoverelem = $(this),
			timeoutId = setTimeout(function(){
				           hoverelem.parent().children('.teamscontainer').fadeOut('fast');
				        }, 500);
		hoverelem.parent().children('a').data('timeoutId',timeoutId);
	});
});