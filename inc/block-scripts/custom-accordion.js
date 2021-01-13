(function ( $ ) {
	
	var $accordionHeader = $('.js--custom-accordion-header');
	var $slidePanel = $('.js--custom-accordion-slide-panel');
	var slidePanelHeightsArray = [];
	var windowResizeTimer;
	
	//Set height to auto to grab the panel height and store it in an array 
	//for animating height when panel opens
	$slidePanel.each(function() {
		$(this).css( 'height', 'auto' );
		slidePanelHeightsArray.push( $(this).height() );
		$(this).css( 'height', '0' );
	});
	
	//If window is resize recalute the height of all slide panels
	$(window).on( 'resize', function() {
		console.log('resize test');
		//Clear timeout so the function only runs if the window stops being resized
		clearTimeout(windowResizeTimer);
		windowResizeTimer = setTimeout(function() {
			console.log('resize function test');
			slidePanelHeightsArray = [];
			$slidePanel.each(function() {
				$(this).css( 'height', 'auto' );
				slidePanelHeightsArray.push( $(this).height() );
				$(this).css( 'height', '0' );
			});
		}, 200);
	});
	
	$accordionHeader.on( 'click', function() {
		console.log('event test');
		if ( !$(this).parent().hasClass('open') ) {
			$(this).parent('.js--custom-accordion').removeClass('open closed').addClass('open');
			$slidePanel.eq( ($(this).parent().index('.js--custom-accordion')) ).css( 'height', slidePanelHeightsArray[($(this).parent().index('.js--custom-accordion'))] + 'px' );
		} else {
			$(this).parent('.js--custom-accordion').removeClass('open closed').addClass('closed');
			$slidePanel.eq( ($(this).parent().index('.js--custom-accordion')) ).css( 'height', '0' );
		}
		
		
//		$(this).parent('.js--custom-accordion').toggleClass('closed');
	});
	
}( jQuery ));