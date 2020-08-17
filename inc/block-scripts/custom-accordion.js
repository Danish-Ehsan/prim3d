(function ( $ ) {
	
	var $accordionHeader = $('.js--custom-accordion-header');
	
	$accordionHeader.on( 'click', function() {
		console.log('event test');
		$(this).parent('.js--custom-accordion').toggleClass('closed');
	});
	
}( jQuery ));