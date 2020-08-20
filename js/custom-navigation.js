(function ( $ ) {
	
	var $navBtn = $('.header__nav-btn');
	var $navMenu = $('.header__nav');
	
	$navBtn.on('click', function() {
		$(this).toggleClass('open');
		$navMenu.toggleClass('open');
	});
	
}( jQuery ));


