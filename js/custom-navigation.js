(function ( $ ) {
	
	//Setup mobile menu toggle
	var $navBtn = $('.header__nav-btn');
	var $navMenu = $('.header__nav');
	
	$navBtn.on('click', function() {
		$(this).toggleClass('open');
		$navMenu.toggleClass('open');
	});
	
	
	//Setup search functions
	var $searchBtn = $('.header__search-btn');
	var $searchCont = $('.header__search-field-cont');
	
	$searchBtn.on('click', function(e) {
		$searchCont.toggleClass('expanded');
	});
	
}( jQuery ));


