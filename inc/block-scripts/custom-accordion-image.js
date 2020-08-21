(function ( $ ) {
	
	var $accordionTopPanel = $('.js--custom-accordion-image-top-panel');
	

	$accordionTopPanel.on( 'click', function() {
		console.log('event test');
		if ( !$(this).parent().hasClass('open') ) {
			$(this).parent('.js--custom-accordion-image').removeClass('open closed').addClass('open');
			console.log('test 1');
		} else {
			$(this).parent('.js--custom-accordion-image').removeClass('open closed').addClass('closed');
			console.log('test 2');
		}
	});

   
   /*
	$accordionTopPanel.on( 'click', function() {
		console.log('event test');
		if ( !$(this).parent().hasClass('expanded') ) {
			$(this).parent('.js--custom-accordion-image').addClass('open');
			$(this).children('.header-cont:eq(1)').animate({
				width: '100%'
			}, 300);
			console.log('test 1');
		} else {
			//$(this).parent('.js--custom-accordion-image').removeClass('open closed').delay(1200).addClass('closed');
			console.log('test 2');
		}
	});
	*/
   
   
}( jQuery ));