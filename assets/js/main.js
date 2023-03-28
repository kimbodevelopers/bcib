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

        const carouselSlides = () => {

            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    loop:true,
                    center: true,
                    margin: 10,
                    items: 1.5,
                    nav: true,
                    navText: ["<i class='fa-solid fa-chevron-left'></i>","<i class='fa-solid fa-chevron-right'></i>"],
                    responsive:{
                        1200:{
                            items: 1.5,
                            slideBy: 1.5,
                        },
                        767:{
                            items: 1
                        },
                    }
                });
        
            });
        }
        
        video();
        carouselSlides();

    })



})(jQuery);
