(function($){

	// Menu icon

	$('.menu-icon').click(function(){
		$(this).toggleClass('fa-bars fa-close');
		$('#nav').slideToggle();
	});

	// Search icon

	$('.fa-search').click(function(){
		$('.mobile-search').slideToggle();
	});

	/*
jquery(document).ready(function($){
    $(".slideshow").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
});
});
*/


	// Owl Carousel
console.log("slideshow");
	$('.slideshow').each(function(){
		var autoPlay = $(this).data('autoplay'),
			items = $(this).data('items'),
			singleItem = $(this).data('singleitem');

		console.log( autoPlay , typeof(autoPlay) );
		console.log( singleItem , typeof(singleItem) );
		console.log( items , typeof(items) );

		if ( autoPlay == 0 || autoPlay == false ) {
			autoPlay = false;
		}

		if ( singleItem ) {
			singleItem = true;
		}
		else {
			singleItem = false;
		}

		if ( items == 0 ) {
			items: false
		}

		$(this).owlCarousel({
			singleItem: singleItem,
			autoPlay: autoPlay,
			items: items
		});
	});

})(jQuery);


