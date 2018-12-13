$(document).ready(function(){

	/*déclaration des variables*/
	var dark = $('.hov');
	var img = $('.item-folio img');
	var content = $('.content');
	var btnCV = $('.btnCV');
	var btnCVdl = $('.btnCVdl');

	// hiden head

	$('.hiden-head').hide();

	//effet de smoothscroll
	$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});

	//cacher hover

	dark.hide();

	//montrer dark au survol de img

	img.mouseenter(function() {
		/* Act on the event */
		$(this).next().fadeIn('slow');
		content.addClass('content_hover');
	});

	dark.mouseleave(function() {
		/* Act on the event */
		$(this).fadeOut('slow');
		content.removeClass('content_hover');
	});


});


