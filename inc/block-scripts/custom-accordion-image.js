(function ( $ ) {
	
	var $accordionTopPanel = $('.js--custom-accordion-image-top-panel');
	var $slidePanel = $('.js--slide-panel');
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
			console.log('running timer function');
			slidePanelHeightsArray = [];
			$slidePanel.each(function() {
				$(this).css( 'height', 'auto' );
				slidePanelHeightsArray.push( $(this).height() );
				$(this).css( 'height', '0' );
			});
		}, 200);
	});
	
	//When panel is opened, animate the height to the full size of the panel
	$accordionTopPanel.on( 'click', function() {
		if ( !$(this).parent().hasClass('open') ) {
			$(this).parent('.js--custom-accordion-image').removeClass('open closed').addClass('open');
			$slidePanel.eq( ($(this).parent().index('.js--custom-accordion-image')) ).css( 'height', slidePanelHeightsArray[($(this).parent().index('.js--custom-accordion-image'))] + 'px' );
		} else {
			$(this).parent('.js--custom-accordion-image').removeClass('open closed').addClass('closed');
			$slidePanel.eq( ($(this).parent().index('.js--custom-accordion-image')) ).css( 'height', '0' );
		}
	});

}( jQuery ));