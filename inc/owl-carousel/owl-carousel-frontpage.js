(function( $ ) { 
   
    $(".owl-carousel").owlCarousel({
        loop: false,
        dots: true,
		items: 2,
		responsive: {
			550: {
				margin: 20
			},
			1024: {
				margin: 20
			}
		}
    });

}( jQuery ));