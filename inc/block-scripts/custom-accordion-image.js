(function ( $ ) {
	
	var $accordionTopPanel = $('.js--custom-accordion-image-top-panel');
	var $slidePanel = $('.js--slide-panel');
	var slidePanelHeightsArray = [];
	
	//Set height to auto to grab the panel height and store it in an array 
	//for animating height when panel opens
	$slidePanel.each(function() {
		$(this).css( 'height', 'auto' );
		slidePanelHeightsArray.push( $(this).height() );
		$(this).css( 'height', '0' );
	});
	
	console.log(slidePanelHeightsArray);
	console.log($slidePanel);
	
	//When panel is opened, animate the height to the full size of the panel
	$accordionTopPanel.on( 'click', function() {
		//console.log($(this).parent('.js--custom-accordion-image'));
		console.log($(this).parent().index('.js--custom-accordion-image'));
		if ( !$(this).parent().hasClass('open') ) {
			console.log('test 1');
			$(this).parent('.js--custom-accordion-image').removeClass('open closed').addClass('open');
			$slidePanel.eq( ($(this).parent().index('.js--custom-accordion-image')) ).css( 'height', slidePanelHeightsArray[($(this).parent().index('.js--custom-accordion-image'))] + 'px' );
		} else {
			$(this).parent('.js--custom-accordion-image').removeClass('open closed').addClass('closed');
			console.log('test 2');
			$slidePanel.eq( ($(this).parent().index('.js--custom-accordion-image')) ).css( 'height', '0' );
		}
	});
   
}( jQuery ));