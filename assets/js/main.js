(function($) {

    $( document ).ready(function($) {
        let video = () => {
            $(".play-button").click(function() {
                $('.video-container video').trigger('play')
            });

            $(".pause-button ").click(function() {
                $('.video-container video').trigger('pause')
            });

            $('.video-container video').on('play', function() {
                $(".play-button").fadeOut();
                $(".pause-button").fadeIn();
                $('.video-overlay').fadeOut()
            })

            $('.video-container video').on('pause', function() {
                $(".pause-button").fadeOut();
                $(".play-button").fadeIn();
                $('.video-overlay').fadeIn()
            })
        }


        // const tabsFunction = () => {
		// 	// Show the first tab and hide the rest
		// 	$('#tabs-nav li:first-child').addClass('active');
		// 	$('.tab-content').hide();
		// 	$('.tab-content:first').show();

		// 	// Click function
		// 	$('#tabs-nav .tab-item').click(function(){
		// 		$('#tabs-nav .tab-item').removeClass('active');
		// 		$(this).addClass('active');
		// 		$('.tab-content').hide();

		// 		var activeTab = $(this).find('a').attr('href');
		// 		$(activeTab).fadeIn();
		// 		return false;
		// 	});
		// }

        const carouselSlides = () => {

            $(document).ready(function(){
                $(".p3-owl-carousel").owlCarousel({
                    loop:true,
                    center: true,
                    dots: false,
                    autoHeight : true,
                    // autoplay: true,
                    margin: 25,
                    stagePadding: 50,
                    nav: true,
                    navText: ["<i class='fa-solid fa-chevron-left'></i>","<i class='fa-solid fa-chevron-right'></i>"],
                    responsive:{
                        0:{
                            items:1
                        },

                        767:{
                            items:1
                        },
                    
    
                        1400:{
                            items:1.5
                        },
                    
                    }
                });


                $(".p5-owl-carousel").owlCarousel({
                    loop:true,
                    center: true,
                    dots: false,
                    autoHeight : true,
                    margin: 25,
                    items: 1,
                    stagePadding: 0,
                    nav: true,
                    navText: ["<i class='fa-solid fa-chevron-left'></i>","<i class='fa-solid fa-chevron-right'></i>"],

                });

            });
        }

       
        video();
        carouselSlides();
        // tabsFunction();
    })



})(jQuery);
