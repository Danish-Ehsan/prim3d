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
   
}( jQuery ));