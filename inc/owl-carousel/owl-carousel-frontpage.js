(function( $ ) { 
   
    $(".owl-carousel").owlCarousel({
        loop: false,
        dots: true,
		items: 2,
		margin: 20,
		responsive: {
			0: {
				items: 1,
				margin: 10
			},
			800: {
				items: 2,
				nav: true
			}
		}
    });

}( jQuery ));