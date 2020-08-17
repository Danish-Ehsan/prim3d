(function ( $ ) {
	
	var $accordionTopPanel = $('.js--custom-accordion-image-top-panel');
	
	$accordionTopPanel.on( 'click', function() {
		console.log('event test');
		$(this).parent('.js--custom-accordion-image').toggleClass('closed');
	});
	
}( jQuery ));