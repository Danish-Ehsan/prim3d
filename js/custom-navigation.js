(function ( $ ) {
	
	//Setup mobile menu toggle
	var $navBtn = $('.header__nav-btn');
	var $navMenu = $('.header__nav');
	var $searchCont = $('.header__search-field-cont');
	
	$navBtn.on('click', function() {
		$(this).toggleClass('open');
		$navMenu.toggleClass('open');
		$searchCont.toggleClass('expanded');
	});
	
	
	//Setup search functions
	var $searchBtn = $('.header__search-btn');
	var $searchInput = $('.search-field');
	
	$searchBtn.on('click', function(e) {
		$(this).toggleClass('expanded');
		$searchCont.toggleClass('expanded');
		
		if ( $searchCont.hasClass('expanded') ) {
			$searchInput.focus();
		}
	});
	
}( jQuery ));


