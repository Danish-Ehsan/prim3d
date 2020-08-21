(function( $ ) { 
   
    $(".owl-carousel").owlCarousel({
        loop: false,
        dots: true,
		items: 2,
		responsive: {
			550: {
				items: 1,
				margin: 20
			},
			800: {
				items: 2
			},
			1024: {
				margin: 20
			}
		}
    });

}( jQuery ));